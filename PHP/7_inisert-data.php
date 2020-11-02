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

    $name = "siam";
    $phone = "7584922386";

    // create a table query 
    $sql = "INSERT INTO `usatrip` .`bishaltable` (`sr`, `name`, `phone`) VALUES (NULL, '$name', '$phone');";

    $result = mysqli_query($con, $sql); //excicute the query 

    // check the table cration is success or not . if $result query done its throw the error 
    if ($result) {
        echo "the data is successfully imported";
    } else {
        echo "the data is not successfully  imported" . mysqli_error($con);
    }


    ?>


<form action="7_inisert-data.php" method="post">
    name <input type="text" name="name" id="name">
    phone <input type="number" name="phone" id="">
</form>
</body>

</html>