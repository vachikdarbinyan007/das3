<?php
    $password=$_POST['pass'];
    $login=$_POST['log'];
    $infoarray=array();
    $con=mysqli_connect("localhost","root","","mysqldb3");
    $sql="SELECT login,password FROM newtab WHERE login='$login' AND password='$password'";
    $ardyunq=mysqli_query($con,$sql);
    $qanak=mysqli_num_rows($ardyunq);
    if($qanak==0){
        $infoarray[0]="Error Try again!";
        echo json_encode($infoarray);
    }else{
        $sql="SELECT login,password,fname,age,img,info FROM newtab WHERE login='$login' AND password='$password'";
        $ardyunq=mysqli_query($con,$sql);
        while($togh=mysqli_fetch_assoc($ardyunq)){
            array_push($infoarray, $togh["fname"], $togh["info"],$togh["age"],$togh["img"]);
            echo json_encode($infoarray);
        };
    };
?>