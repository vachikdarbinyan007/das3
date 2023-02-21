<?php
   $name=$_POST['anun'];
   $tariq=$_POST['tariq'];
   $txt=$_POST['txt'];
   $nkar=$_POST['nkar'];
   $login=$_POST['log'];
   $password=$_POST['pass'];
   $con=mysqli_connect('localhost','root','','mysqldb3');


     // ugharkel baza
     $query="INSERT INTO newtab VALUES('','$name','$tariq','$login','$password','$nkar','$txt')";
     mysqli_query($con,$query);
     // vercnel bazaic
     $sql="SELECT name,email,country FROM tab";
     $result=mysqli_query($con,$sql);
?>