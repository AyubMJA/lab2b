<?

// turn off notices, warnings, deprecated errors
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));  

/* DB header info */
$DB['server'] = 'localhost';
$DB['user'] = 'root';
$DB['password'] = 'root';
$DB['db'] = 'lab2';

try 
{

  // connect to database
  $conn = new PDO("mysql:host=".$DB['server'].";dbname=".$DB['db'], 
	              $DB['user'], 
				  $DB['password']);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // have my fetch data returned as an associative array
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
  exit();
}


?>