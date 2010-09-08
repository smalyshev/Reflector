<?php
/*
 * Generate PHPDoc description files for given classes from an extension
 */
include 'reflector.conf.php';

$ext = new ReflectionExtension($argv[1]);
echo "<?php\n";
foreach($ext->getClasses() as $class)
{
	echo writeClass($class);
}

function writeClass($class) {
	$parent = $class->getParentClass();
	if($parent) {
		$extends = "extends {$parent->name} ";
	} else {
		$extends = "";
	}
	$str = <<<END
/**
 * Class {$class->name}
 */
class {$class->name} $extends{

END;

	foreach($class->getMethods() as $method) {
		$str .= writeMethod($method, $class);
	}
	$str .= "}\n";
	return $str;
}

function writeMethod(ReflectionMethod $method, ReflectionClass $class)
{
	if($method->getDeclaringClass() != $class) {
		return "";
	}
	$acc = $method->getModifiers();
	$func = "";
	if($acc & ReflectionMethod::IS_STATIC) {
		$func .= "static ";
	}
	if($acc & ReflectionMethod::IS_ABSTRACT) {
		$func .= "abstract ";
	}
	if($acc & ReflectionMethod::IS_FINAL) {
		$func .= "final ";
	}
	if($acc & ReflectionMethod::IS_PUBLIC) {
		$func .= "public ";
	}
	if($acc & ReflectionMethod::IS_PROTECTED) {
		$func .= "protected ";
	}
	if($acc & ReflectionMethod::IS_PRIVATE) {
		$func .= "private ";
	}

	$data = methodData($method);
	$params = $data[1];
	if(empty($params)) {
		$refparams = $method->getParameters();
		if(!empty($refparams)) {
			foreach($refparams as $param) {
				$params[] = "\$".$param->name;
			}
		} else {
			for($i=0;$i<$method->getNumberOfParameters();$i++) {
				$params[] = "\$arg$i";
			}
		}
	}
	$params = join(",", $params);
	return "$data[0]{$func}function {$method->name}($params) {}\n";
}

function methodData(ReflectionMethod $method)
{
	$cname = strtolower($method->getDeclaringClass()->name);
	$mname = trim(str_replace("_", "-", strtolower($method->name)), "-");
	$ename = strtolower($method->getDeclaringClass()->getExtension()->name);
	$fname = DOCBOOK."/$ename/$cname/$mname.xml";

	if(!file_exists($fname)) {
		//echo "No file $fname\n";
		return "";
	}
	$data = file_get_contents($fname);
	$data = preg_replace("/&[\w.]+;/", "", $data);
	$xml =simplexml_load_string($data);

	$comment = (string)$xml->refnamediv->refpurpose;
	$return = (string)$xml->refsect1->methodsynopsis->type;
	$out = <<<END
/**
 * $comment

END;
	$args = array();
	foreach($xml->refsect1->methodsynopsis->methodparam as $param) {
		$out .= " * @param {$param->type} \${$param->parameter}\n";
		$args[] = "$".$param->parameter;
	}
	if($return) {
		$out .= " * @return $return\n";
	}
	$out .= " */\n";
	return array($out, $args);
}
