<?php
   require('connect_db.php');
   if(isset($_POST['username']) and isset($_POST['pass']))
   {
       $user=$_POST['username'];
       $password= $_POST['pass'];
       $query="SELECT * FROM admin where username='$user' and pass='$password'";
       $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
       $table=mysqli_num_rows($result);
       if($table>=1)
       {
           header("Location:addques.php");
       }
       else
       {
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
        header("Location:index.php");
       }
   }
mysqli_close($connection);   
?>