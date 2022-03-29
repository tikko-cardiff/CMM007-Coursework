<!--Delete on the story-dashboard-->
<?php
include_once("dbconnection.php");

if (isset($_GET['sid']))  {
    $entryid = $_GET['sid'];
 $query = "DELETE FROM stories WHERE entryid=$entryid";
    $_result =mysqli_query($db,$query);
    echo "Deleted";  
}
//Delete on the users-dashboard
elseif (isset($_GET['uid']))  {
    $uid = $_GET['uid'];
 $query = "DELETE FROM users WHERE uid=$uid";
    $_result =mysqli_query($db,$query);
    echo "Deleted";  
}
else {
     die(mysqli_error());
}
?>