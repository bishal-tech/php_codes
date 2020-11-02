<?php
//make a form that take user name, email, address, and phone number and save it in Database

        // make variable to make connection to the server 
$server = "localhost";
$user = "root";
$password = "";

$conn = mysqli_connect($server , $user, $password); //set the connection to the server

// cheake the cinnection to the server 
if (!$conn){
    die("Your connection faild". mysqli_connect_error() );//mysqli_connect_error() show the connection error
}
// echo "connection is succesful";

// take the value from the Form 
$name  =$_POST['name'];
$email =$_POST['email'];
$address =$_POST['address'];
$phone =$_POST['phone'];

// run the SQl query , it insert the data to the database 
$sql = "INSERT INTO `usatrip` . `student` ( `name`, `mail`, `address`, `phone`) VALUES ( '$name', '$email', '$address', '$phone');";
// echo $sql;

// cheake the database connection. DB is connect or Not 
if($conn->query($sql)== true){
    // echo "succesfully submited";
}else{
    echo "ERROE: $sql <br> $conn->error"; //if data is not insert it will show this error 
}
$conn->close(); //Close the connection


?>