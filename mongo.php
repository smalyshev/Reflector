<?php
/**
 * Class Mongo
 */
class Mongo {
/**
 * Creates a new database connection object
 * @param string $server
 * @param array $options
 */
public function __construct($server,$options) {}
/**
 * Connects to a database server
 * @return boolean
 */
public function connect() {}
/**
 * Connects to paired database server [deprecated]
 * @return boolean
 */
public function pairConnect() {}
/**
 * Creates a persistent connection with a database server [deprecated]
 * @param string $username
 * @param string $password
 * @return boolean
 */
public function persistConnect($username,$password) {}
/**
 * Creates a persistent connection with paired database servers [deprecated]
 * @param string $username
 * @param string $password
 * @return boolean
 */
public function pairPersistConnect($username,$password) {}
/**
 * Connects with a database server
 * @return boolean
 */
protected function connectUtil() {}
/**
 * String representation of this connection
 * @return string
 */
public function __toString() {}
/**
 * Gets a database
 * @param string $dbname
 * @return MongoDB
 */
public function __get($dbname) {}
/**
 * Gets a database
 * @param string $name
 * @return MongoDB
 */
public function selectDB($name) {}
/**
 * Gets a database collection
 * @param string $db
 * @param string $collection
 * @return MongoCollection
 */
public function selectCollection($db,$collection) {}
/**
 * Drops a database [deprecated]
 * @param mixed $db
 * @return array
 */
public function dropDB($db) {}
/**
 * Check if there was an error on the most recent db operation performed [deprecated]
 * @return array
 */
public function lastError() {}
/**
 * Checks for the last error thrown during a database operation [deprecated]
 * @return array
 */
public function prevError() {}
/**
 * Clears any flagged errors on the connection [deprecated]
 * @return array
 */
public function resetError() {}
/**
 * Creates a database error on the database [deprecated]
 * @return bool
 */
public function forceError() {}
/**
 * Lists all of the databases available.
 * @return array
 */
public function listDBs() {}
/**
 * Closes this database connection
 * @return boolean
 */
public function close() {}
}
/**
 * Class MongoDB
 */
class MongoDB {
/**
 * Creates a new database
 * @param Mongo $conn
 * @param string $name
 */
public function __construct($conn,$name) {}
/**
 * The name of this database
 * @return string
 */
public function __toString() {}
/**
 * Gets a collection
 * @param string $name
 * @return MongoCollection
 */
public function __get($name) {}
/**
 * Fetches toolkit for dealing with files stored in this database
 * @param string $prefix
 * @return MongoGridFS
 */
public function getGridFS($prefix) {}
/**
 * Gets this databases profiling level
 * @return int
 */
public function getProfilingLevel() {}
/**
 * Sets this databases profiling level
 * @param int $level
 * @return int
 */
public function setProfilingLevel($level) {}
/**
 * Drops this database
 * @return array
 */
public function drop() {}
/**
 * Repairs and compacts this database
 * @param bool $preserve_cloned_files
 * @param bool $backup_original_files
 * @return array
 */
public function repair($preserve_cloned_files,$backup_original_files) {}
/**
 * Gets a collection
 * @param string $name
 * @return MongoCollection
 */
public function selectCollection($name) {}
/**
 * Creates a collection
 * @param string $name
 * @param bool $capped
 * @param int $size
 * @param int $max
 * @return MongoCollection
 */
public function createCollection($name,$capped,$size,$max) {}
/**
 * Drops a collection [deprecated]
 * @param mixed $coll
 * @return array
 */
public function dropCollection($coll) {}
/**
 * Get a list of collections in this database
 * @return array
 */
public function listCollections() {}
/**
 * Creates a database reference
 * @param string $collection
 * @param mixed $a
 * @return array
 */
public function createDBRef($collection,$a) {}
/**
 * Fetches the document pointed to by a database reference
 * @param array $ref
 * @return array
 */
public function getDBRef($ref) {}
/**
 * Runs JavaScript code on the database server.
 * @param mixed $code
 * @param array $args
 * @return array
 */
public function execute($code,$args) {}
/**
 * Execute a database command
 * @param array $data
 * @return array
 */
public function command($data) {}
/**
 * Check if there was an error on the most recent db operation performed
 * @return array
 */
public function lastError() {}
/**
 * Checks for the last error thrown during a database operation
 * @return array
 */
public function prevError() {}
/**
 * Clears any flagged errors on the database
 * @return array
 */
public function resetError() {}
/**
 * Creates a database error
 * @return bool
 */
public function forceError() {}
/**
 * Log in to this database
 * @param string $username
 * @param string $password
 * @return array
 */
public function authenticate($username,$password) {}
}
/**
 * Class MongoCollection
 */
class MongoCollection {
/**
 * Creates a new collection
 * @param MongoDB $db
 * @param string $name
 */
public function __construct($db,$name) {}
/**
 * String representation of this collection
 * @return string
 */
public function __toString() {}
/**
 * Gets a collection
 * @param string $name
 * @return MongoCollection
 */
public function __get($name) {}
/**
 * Returns this collections name
 * @return string
 */
public function getName() {}
/**
 * Drops this collection
 * @return array
 */
public function drop() {}
/**
 * Validates this collection
 * @param bool $scan_data
 * @return array
 */
public function validate($scan_data) {}
/**
 * Inserts an array into the collection
 * @param array $a
 * @param array $options
 * @return mixed
 */
public function insert($a,$options) {}
/**
 * Inserts multiple documents into this collection
 * @param array $a
 * @param array $options
 * @return mixed
 */
public function batchInsert($a,$options) {}
/**
 * Update records based on a given criteria
 * @param array $criteria
 * @param array $newobj
 * @param array $options
 * @return boolean
 */
public function update($criteria,$newobj,$options) {}
/**
 * Remove records from this collection
 * @param array $criteria
 * @param array $options
 * @return mixed
 */
public function remove($criteria,$options) {}
/**
 * Querys this collection
 * @param array $query
 * @param array $fields
 * @return MongoCursor
 */
public function find($query,$fields) {}
/**
 * Querys this collection, returning a single element
 * @param array $query
 * @param array $fields
 * @return array
 */
public function findOne($query,$fields) {}
/**
 * 
   Creates an index on the given field(s), or does nothing if the index 
   already exists
  
 * @param array $keys
 * @param array $options
 * @return boolean
 */
public function ensureIndex($keys,$options) {}
/**
 * Deletes an index from this collection
 * @param string|array $keys
 * @return array
 */
public function deleteIndex($keys) {}
/**
 * Delete all indices for this collection
 * @return array
 */
public function deleteIndexes() {}
/**
 * Returns an array of index names for this collection
 * @return array
 */
public function getIndexInfo() {}
/**
 * Counts the number of documents in this collection
 * @param array $query
 * @param int $limit
 * @param int $skip
 * @return int
 */
public function count($query,$limit,$skip) {}
/**
 * Saves an object to this collection
 * @param array $a
 * @param array $options
 * @return mixed
 */
public function save($a,$options) {}
/**
 * Creates a database reference
 * @param array $a
 * @return array
 */
public function createDBRef($a) {}
/**
 * Fetches the document pointed to by a database reference
 * @param array $ref
 * @return array
 */
public function getDBRef($ref) {}
static protected function toIndexString() {}
/**
 * Performs an operation similar to SQL's GROUP BY command
 * @param mixed $keys
 * @param array $initial
 * @param MongoCode $reduce
 * @param array $options
 * @return array
 */
public function group($keys,$initial,$reduce,$options) {}
}
/**
 * Class MongoCursor
 */
class MongoCursor {
/**
 * Create a new cursor
 * @param resource $connection
 * @param string $ns
 * @param array $query
 * @param array $fields
 */
public function __construct($connection,$ns,$query,$fields) {}
/**
 * Checks if there are any more elements in this cursor
 * @return boolean
 */
public function hasNext() {}
/**
 * Return the next object to which this cursor points, and advance the cursor
 * @return array
 */
public function getNext() {}
/**
 * Limits the number of results returned
 * @param int $num
 * @return MongoCursor
 */
public function limit($num) {}
/**
 * Skips a number of results
 * @param int $num
 * @return MongoCursor
 */
public function skip($num) {}
/**
 * Sets the fields for a query
 * @param array $f
 * @return MongoCursor
 */
public function fields($f) {}
/**
 * Sets whether this query can be done on a slave
 * @param boolean $okay
 * @return MongoCursor
 */
public function slaveOkay($okay) {}
/**
 * Sets whether this cursor will be left open after fetching the last results
 * @param boolean $tail
 * @return MongoCursor
 */
public function tailable($tail) {}
/**
 * Sets whether this cursor will timeout
 * @param boolean $liveForever
 * @return MongoCursor
 */
public function immortal($liveForever) {}
/**
 * Sets a client-side timeout for this query
 * @param int $ms
 * @return MongoCursor
 */
public function timeout($ms) {}
/**
 * Checks if there are documents that have not been sent yet from the database for this cursor
 * @return boolean
 */
public function dead() {}
/**
 * Use snapshot mode for the query
 * @return MongoCursor
 */
public function snapshot() {}
/**
 * Sorts the results by given fields
 * @param array $fields
 * @return MongoCursor
 */
public function sort($fields) {}
/**
 * Gives the database a hint about the query
 * @param array $key_pattern
 * @return MongoCursor
 */
public function hint($key_pattern) {}
/**
 * Adds a top-level key/value pair to a query
 * @param string $key
 * @param mixed $value
 * @return MongoCursor
 */
public function addOption($key,$value) {}
/**
 * Execute the query.
 * @return void
 */
protected function doQuery() {}
/**
 * Returns the current element
 * @return array
 */
public function current() {}
/**
 * Returns the current results _id
 * @return string
 */
public function key() {}
/**
 * Advances the cursor to the next result
 * @return void
 */
public function next() {}
/**
 * Returns the cursor to the beginning of the result set
 * @return void
 */
public function rewind() {}
/**
 * Checks if the cursor is reading a valid result.
 * @return boolean
 */
public function valid() {}
/**
 * Clears the cursor
 * @return void
 */
public function reset() {}
/**
 * Return an explanation of the query, often useful for optimization and debugging
 * @return array
 */
public function explain() {}
/**
 * Counts the number of results for this query
 * @param boolean $foundOnly
 * @return int
 */
public function count($foundOnly) {}
public function info() {}
}
/**
 * Class MongoGridFS
 */
class MongoGridFS extends MongoCollection {
/**
 * Creates new file collections
 * @param MongoDB $db
 * @param string $prefix
 */
public function __construct($db,$prefix) {}
/**
 * Drops the files and chunks collections
 * @return array
 */
public function drop() {}
/**
 * Queries for files
 * @param array $query
 * @param array $fields
 * @return MongoGridFSCursor
 */
public function find($query,$fields) {}
/**
 * Stores a file in the database
 * @param string $filename
 * @param array $extra
 * @param array $options
 * @return mixed
 */
public function storeFile($filename,$extra,$options) {}
/**
 * Chunkifies and stores bytes in the database
 * @param string $bytes
 * @param array $extra
 * @param array $options
 * @return mixed
 */
public function storeBytes($bytes,$extra,$options) {}
/**
 * Returns a single file matching the criteria
 * @param mixed $query
 * @return MongoGridFSFile
 */
public function findOne($query) {}
/**
 * Removes files from the collections
 * @param array $criteria
 * @param array $options
 * @return boolean
 */
public function remove($criteria,$options) {}
/**
 * Saves an uploaded file to the database
 * @param string $name
 * @param string $filename
 * @return mixed
 */
public function storeUpload($name,$filename) {}
}
/**
 * Class MongoGridFSFile
 */
class MongoGridFSFile {
/**
 * Create a new GridFS file
 * @param MongoGridFS $gridfs
 * @param array $file
 */
public function __construct($gridfs,$file) {}
/**
 * Returns this files filename
 * @return string
 */
public function getFilename() {}
/**
 * Returns this files size
 * @return int
 */
public function getSize() {}
/**
 * Writes this file to the filesystem
 * @param string $filename
 * @return int
 */
public function write($filename) {}
/**
 * Returns this files contents as a string of bytes
 * @return string
 */
public function getBytes() {}
}
/**
 * Class MongoGridFSCursor
 */
class MongoGridFSCursor extends MongoCursor {
/**
 * Create a new cursor
 * @param MongoGridFS $gridfs
 * @param resource $connection
 * @param string $ns
 * @param array $query
 * @param array $fields
 */
public function __construct($gridfs,$connection,$ns,$query,$fields) {}
/**
 * Return the next file to which this cursor points, and advance the cursor
 * @return MongoGridFSFile
 */
public function getNext() {}
/**
 * Returns the current file
 * @return MongoGridFSFile
 */
public function current() {}
/**
 * Returns the current results filename
 * @return string
 */
public function key() {}
}
/**
 * Class MongoId
 */
class MongoId {
/**
 * Creates a new id
 * @param string $id
 */
public function __construct($id) {}
/**
 * Returns a hexidecimal representation of this id
 * @return string
 */
public function __toString() {}
/**
 * Gets the number of seconds since the epoch that this id was created
 * @return int
 */
public function getTimestamp() {}
}
/**
 * Class MongoCode
 */
class MongoCode {
/**
 * Creates a new code object
 * @param string $code
 * @param array $scope
 */
public function __construct($code,$scope) {}
/**
 * Returns this code as a string
 * @return string
 */
public function __toString() {}
}
/**
 * Class MongoRegex
 */
class MongoRegex {
/**
 * Creates a new regular expression
 * @param string $regex
 */
public function __construct($regex) {}
/**
 * A string representation of this regular expression
 * @return string
 */
public function __toString() {}
}
/**
 * Class MongoDate
 */
class MongoDate {
/**
 * Creates a new date.
 * @param long $sec
 * @param long $usec
 */
public function __construct($sec,$usec) {}
/**
 * Returns a string representation of this date
 * @return string
 */
public function __toString() {}
}
/**
 * Class MongoBinData
 */
class MongoBinData {
/**
 * Creates a new binary data object.
 * @param string $data
 * @param int $type
 */
public function __construct($data,$type) {}
/**
 * The string representation of this binary data object.
 * @return string
 */
public function __toString() {}
}
/**
 * Class MongoDBRef
 */
class MongoDBRef {
/**
 * Creates a new database reference
 * @param string $collection
 * @param mixed $id
 * @param string $database
 * @return array
 */
static public function create($collection,$id,$database) {}
/**
 * Checks if an array is a database reference
 * @param mixed $ref
 * @return boolean
 */
static public function isRef($ref) {}
/**
 * Fetches the object pointed to by a reference
 * @param MongoDB $db
 * @param array $ref
 * @return array
 */
static public function get($db,$ref) {}
}
/**
 * Class MongoException
 */
class MongoException extends Exception {
}
/**
 * Class MongoCursorException
 */
class MongoCursorException extends MongoException {
}
/**
 * Class MongoCursorTimeoutException
 */
class MongoCursorTimeoutException extends MongoCursorException {
}
/**
 * Class MongoConnectionException
 */
class MongoConnectionException extends MongoException {
}
/**
 * Class MongoGridFSException
 */
class MongoGridFSException extends MongoException {
}
/**
 * Class MongoTimestamp
 */
class MongoTimestamp {
/**
 * Creates a new timestamp.
 * @param long $sec
 * @param long $inc
 */
public function __construct($sec,$inc) {}
/**
 * Returns a string representation of this timestamp
 * @return string
 */
public function __toString() {}
}
/**
 * Class MongoMaxKey
 */
class MongoMaxKey {
}
/**
 * Class MongoMinKey
 */
class MongoMinKey {
}
