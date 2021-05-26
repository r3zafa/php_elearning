<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>php playground</title>
</head>

<body>
    <div class="container">
        <a type="button" class="btn btn-warning mt-5 mb-5" href="../index.php"> Go back to Overview </a>
        <h1 class="text-center bg-danger p-3">Php playground</h1>
        <h2> php echo </h2>
        <!-- php tags -->
        <?php
        //php comment /* */
        echo "my name is Reza"; // echo command
        ?>
        <br>
        <!--2. php tag-->
        <?php
        echo 5 + 4 + 2;
        ?>
        <!-- php tags end-->
        <h2>php variables</h2>
        <!--php variables start with $ -->
        <!--php variables contain dashes, underscore, letters, numbers. no (-,1) at start of the name -->
        <!--php variables are Upper_lower case sensitive -->
        <?php
        $name = "Reza";
        echo "name is: $name";
        echo "<br>";
        $age = 22;
        echo "age is: $age";
        echo "<br>";
        $a = 2;
        $b = 4;
        $c = $a + $b;
        echo "C is : $c";

        ?>

        <h2>Constants in php</h2>
        <?php
        echo "use define ('name', value) to define a constant";
        echo "<br>";
        // constants
        define("valueOfPi", 3.14);
        define("valueOfGravity", 9.8);

        echo "Pi is equal to: " . valueOfPi;
        echo "<br>";
        echo "Gravity is equal to: " .  valueOfGravity;
        ?>
        <h2>Strings in php</h2>
        <?php

        ?>
        <h2>Numbers in php</h2>
        <?php

        ?>

        <h2>Arrays in php</h2>
        <?php

        ?>
        <h2>Array Funktions in php</h2>

    </div>
</body>

</html>