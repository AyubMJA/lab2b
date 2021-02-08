<?

// For simple apps, we can actually put our model code (database access + 
// business logic) right into the controller.  For more complex apps with 
// more actions and database access code, we'll want to use a seperate model.
//

// Here we define a deleteCat method that is responsible for deleting a 
// cat from the database.  We give it the database connection and id of 
// the cat to delete in order to carry out the work, and then we just 
// call it from our controller.
//
function deleteCat($conn,$id)
{

  try {
    $stmt = $conn->prepare("DELETE FROM Cats WHERE id=?");
    $stmt->execute([$id]);
  }
  catch(PDOException $e)
  {
    echo "Delete failed: " . $e->getMessage();
    exit();
  }	
}


?>