What?
----

PHP script that creates PHP stubs for PDT from extensions and docbooc XML

How?
----

0. Compile PHP with target extension and check out phpdoc docbook
1. Copy reflector.conf.php.dist to reflector.conf.php
2. Edit reflector.conf.php and put the path of phpdoc checkout there
3. Run:
php reflector.php myextension > myextension.php
4. Enjoy stubs in myextension.php
