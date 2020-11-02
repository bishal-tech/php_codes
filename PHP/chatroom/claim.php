<?php
$room = $_POST['room'];

if (strlen('room') > 20 or strlen('room') < 2) { //erro handel room name must be 2-20 char  

  $message = "the rooom name is must be 2-2o charecture";

  echo '<script language="javascript">';
  echo 'alert($message)';  //not showing an alert box.
  echo '</script>';
} else if (!ctype_alnum('room')) {
  $message = "the rooom name is must alpha and numaric charecture "; //handel the error like if he room name  is no alpha neumaric char

  echo '<script language="javascript">';
  echo 'alert($message)';  //not showing an alert box.
  echo '</script>';
}
// connect to the database 
else {
  include 'db_connect.php  ';  //include hepls take the hole page or codes in this page 
}

// cheak if rooom already exsist

$sql = "SELECT * FROM `clients` WHERE roomname ='$room' ";
$result = mysqli_query($con, $sql);

if ($result) {
  if (mysqli_num_row($result) > 0) {
    $message = "the rooom name is already exsist . please choose the different name ";

    echo '<script language="javascript">';
    echo 'alert($message)'; //not showing an alert box.
    echo "window.location= https://localhost/php/chatroom";
    echo '</script>';
  }
  else {
  $sql = "INSERT INTO `clients` (`roomname`, `date`) VALUES ( '$room', 'current_timestamp()');";

  if (mysqli_query($con,$sql)) {
    $message = "Your rooom is ready , you can chat now ";

    echo '<script language="javascript">';
    echo 'alert($message)';  //not showing an alert box.
    echo 'window.location= https://localhost/php/chatroom/room.php?roomname='. $room .'";';
    echo '</script>';
  }
  }
}
