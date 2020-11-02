<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "chatroom";


$con = mysqli_connect($server, $user, $password , $database );

//check connection \
if (!$con) {
    die("faild to connecet". mysqli_connect_error());

}
else{
    echo "lets chat now my friend";
}

?>