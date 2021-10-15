<?php

$email =$_POST['text'];
$password =$_POST['password'];

//data base connection
$con = new mysqli("localhost","root","","bdb");
if($con->connect_error){

die("Fail to Connect : ".$con->connect_error);

}else{

$stmt = $con->prepare("select * from login where email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0){

    $data=$stmt_result->fetch_assoc();
    if($data['pass']===$password){
        echo "<h2>LOGIN SUCCESSFUL</h2>";
    }else{

echo "<h2>Invalide password or user name</h2>";


    }

    }else{

        echo "<h2>Invalide password or user name</h2>";
}




}



?>
