<?php
 include "db.inc.php";
?>

<?php
 
 if(isset($_GET)){
  $id=$_GET['delete'];
  $query="DELETE FROM admin WHERE adminId='$id';";

  if($mysqli->query($query)){
      header('location: ../adminpanel.php');
  }

 }
 

?>