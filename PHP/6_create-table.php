<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create table using SQL script</title>
</head>

<body>
    <?php
    // conneting to the databse 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = ""; //put the database name

    $con = mysqli_connect($server, $user, $pass, $database);

    // die is the connection not successful

    if (!$con) {
        die("the connection was not successfully connect" . mysqli_connect_error());
    } else {
        echo "the connection is successful";
    }

    // create a table query 
    $sql = "CREATE TABLE `usatrip`.`bishaltable` ( `sr` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `phone` VARCHAR(12) NOT NULL , PRIMARY KEY (`sr`)) ENGINE = InnoDB;";

    $result = mysqli_query($con, $sql); //excicute the query 

    // check the table cration is success or not . if $result query done its throw the error 
    if ($result) {
        echo "the table is successfully crated";
    } else {
        echo "the table is not successfully crated" . mysqli_error($con);
    }


    ?>
</body>

</html>