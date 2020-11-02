<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    // write PHP top on your programe 
    // to see the "submit succssful message" $insert value is by default false 
    $insert = false;

    // set a validation method , if user can not input his/her name the query in not run 
    if (isset($_POST['name'])) {

        // make variable to make connection to the server 
        $server = "localhost";
        $user = "root";
        $password = "";

        // connect to the server 
        $conn = mysqli_connect($server, $user, $password);

        // cheake the cinnection to the server 
        if (!$conn) {
            die("Your connection faild" . mysqli_connect_error()); //mysqli_connect_error() show the connection error
        }
        // echo "connection is succesful";

        // take the value from the Form 
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        // run the SQl query 
        $sql = "INSERT INTO `usatrip` . `student` ( `name`, `mail`, `address`, `phone`) VALUES ( '$name', '$email', '$address', '$phone');";
        // se the sql command 
        // echo $sql;

        // cheake the database connection. DB is connect or NOt 
        if ($conn->query($sql) == true) {
            // echo "succesfully submited";

            // to see the "submit succssful message" if submiting process is successful $insert =true  
            $insert = true;
        } else {
            // to see the error message 
            echo "ERROR: $sql <br> $conn->error";
        }
        $conn->close(); //close the connection
    }
    ?>

    <img class="bg" src="bg.jpg" alt="background image ">
    <div class="maincontainer">
        <h1> Wecome to USA Trip From</h1>
        <p>Enter your details to conferm your USA trip </p>
        <?php
        // if insert successfull show the message 
        if ($insert == true) {
            echo "<p id='submsg'>Your Details is Succesfully Submited </p>";
        }

        ?>

        <div class="container">
            <form action="tripform.php" method="post">
                <spam>Name: </spam>
                <input type="text" name="name" id="name">
                <spam>Email Address: </spam>
                <input type="text" name="email" id="eamil">
                <spam>Address: </spam>
                <input type="text" name="address" id="adsress">
                <spam>Phone Number: </spam>
                <input type="text" name="phone" id="phone">
                <button type="submit" class="btn">Submit</button>
                <button type="submit" class="btn">Reset</button>

            </form>

        </div>
    </div>


   
</body>

</html>