<?

include 'app.config.php';
include 'app.model.php';

// Code that needs to execute no matter what action below takes place can be 
// placed here (or beneath the switch depending on where it makes the most
// sense)
//
$TPL['controller'] = $_SERVER['PHP_SELF'];


// Switch controller
//
switch ($_REQUEST['act'])
{
  
  // create a new cat 
  case 'create':

    try {
      $stmt = $conn->prepare("INSERT INTO Cats " .
                             "(id,name,breed,owner,imageurl) VALUES " . 
                             "(?, ?, ?, ?, ?)");
      $stmt->execute(["null", $_POST[name], $_POST[breed], $_POST[owner], 
                     $_POST[imageurl]]);
    }
    catch(PDOException $e)
    {
      echo "Insert failed: " . $e->getMessage();
      exit();
    }

    break;


  // send the cat to the cat farm
  case 'update':
    try {
      $stmt = $conn->prepare("UPDATE Cats SET owner='Cat Farm' WHERE id=?");
      $stmt->execute([$_REQUEST['id']]);
    }
    catch(PDOException $e)
    {
      echo "Update failed: " . $e->getMessage();
      exit();
    }

    break;
  

  // delete a cat
  case 'delete':

    deleteCat($conn, $_REQUEST['id']);

    break;
  
}


// Code that needs to be executed no matter what action above occurred 
// can be placed here...
//
try 
{
  // build the select query
  $stmt = $conn->prepare("SELECT * FROM Cats");

  // execute the query, save reference to results
  $stmt->execute();

  // grab results of query for as long as results, store in TPL
  while ($nextRow = $stmt->fetch()) $TPL['results'][] = $nextRow;
}
catch(PDOException $e)
{
    echo "Select failed: " . $e->getMessage();
    exit();
}

// Include our app view file at the bottom of the controller
include 'app.view.php';

?>