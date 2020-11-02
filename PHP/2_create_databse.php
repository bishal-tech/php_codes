<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database </title>
</head>
<body>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";

    $conn = mysqli_connect($server, $user, $password);

    if(!$conn){
        die("The connection is faild ". mysqli_connect_error());
    }
    //echo " Connection created "

    $dbname = $_POST['db'];

    $result = false;

    $sql = "CREATE DATABASE $dbname";
    $result = mysqli_query($conn, $sql);

    if($result== true ){
        echo "database created ";
    }else{
      //  echo " Database creation is faild";
    }



    ?>

<h2>Create Your Dadabse in MySQl Server</h2>
<hr>
<form action="create_databse.php" method="post">
    <input type="text" name="db" id="db" placeholder="Enter your database name ">
    <button type="submit">Create</button>
</form>
    
</body>
</html>