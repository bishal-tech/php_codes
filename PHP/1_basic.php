<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>Variable in PHP </H1>

    <?php
    // variable start with $ sign. we dont have to define variable type
    $a = 10;
    $name = "bisal";
    echo "My name is $name";
    ?>

    <h2>Data types in PHP</h2>
    <?php
    //1.Integer 2.String 3.boolen 

    $b = 12;
    $c = "bishaldeb";
    $d = true;
    echo $b . "<br>";
    echo $c . "<br>";
    echo $d . "<br>";

    echo "the string length is =" . strlen($c);

    ?>

    <h2>The operatr of PHP</h2>
    <?php
    // We have 4 types of operator 

    // Arirthmatic  operator
    $num1 = 12;
    $num2 = 34;
    echo "the value is = " . ($num1 + $num2) . "<br>";
    echo "the - is = " . ($num1 - $num2) . "<br>";
    echo "the value * is = " . $num1 * $num2 . "<br>";
    echo "the value / is = " . $num1 / $num2 . "<br>";

    // Logial operator 
    //Comparision Operator 

    ?>

    <h2>If... else stament </h2>
    <?php
    $a = 12;
    $b = 12;

    // Syntax of if ... else 
    if ($a > $b) {
        echo "The higest number is " . $a;
    } else {
        echo "The higest nnumber is " . $b . "<br>";
    }

    // Nested if...else ..________________>
    $age = 23;
    if ($age > 40) {
        echo " you are men";
    } elseif ($age >= 18) {
        echo "you are young boy ";
    } else {
        echo "you are kid";
    }

    ?>

    <h2>Switch case statement </h2>
    <?php
    $age = 23;

    // Syntax of Switch case 
    switch ($age) {
        case 10:
            echo "you are kid";
            break; //must put a break; statement 

        case 18:
            echo "you are youn boy ";
            break;
        case 40:
            echo "you ARE MAN";
            break;
        default:
            echo "your age is undefine ";
            break;
    }

    ?>

    <h2>Loops in PHP</h2>
    <?php
    $num = 3;

    // example of for loop 
    for ($i = 0; $i <= 10; $i++) {
        echo "$num * $i =" . ($num * $i) . "<br>";
    }

    // example of while loop 
    while ($num <= 10) {
        echo $num . "<br>";
        $num++;
    }

    // example of Do while loop 
    do {
        echo "the valur of num is = " . $num;
    } while ($num <= 10);


    ?>

    <h2>array in PHP</h2>

    <?php
    $lan = ["bengali", "hindi", "english"]; // this is an Array abject

    echo $lan[2];
    // print every object by foreach loop 
    foreach ($lan as $value) {
        echo "<br> the laguage are = " . $value;
    }

    ?>


    <h2>Let know about PHP Function </h2>
    <?php
    // Function helps to done a same work multipal time in our programme 
    function avg()
    {
        $var1 = 21;
        $var2 = 34;
        echo ($var1 + $var2) / 2; //it make  your avarage marks , we use avg() function multipal time in our programme 
    }
    echo avg();

    ?>



</body>

</html>