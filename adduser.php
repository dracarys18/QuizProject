<?php
require('connect_db.php');
if(isset($_POST['userid']) and isset($_POST['username']))
{
    $id=$_POST['userid'];
    $name=$_POST['username'];

    $query="INSERT INTO USERS VALUES ('$id','$name','')";
    if(mysqli_query($connection, $query))
    {
        header("Location:quiz.php");
    }   
    else
    {
        echo "<script type='text/javascript'>alert('Error adding user to sql. Userid already exists')</script>";
    }
  
   
}
mysqli_close($connection);
?>
