<?php

include'DataBase/connect.php';

if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from 'table_name' where 'username'='$u' and 'password'= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       header('location: ../index.html');
   }
  
}

?>