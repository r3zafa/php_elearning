<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>php playground</title>
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-dark bg-primary fixed-top">
        <a class="navbar-brand px-4" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-dice-3-fill" viewBox="0 0 19 20">
                <path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
            </svg>
            Php eLearning
        </a>
        <a class="navbar-brand btn btn-outline-warning ml-5 mr-5" href="../index.php" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 19 20">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Go back
        </a>
    </nav>
    <main role="main" class="container bg-light">
        <br>
        <div class="">
            <h1 class="text-center bg-danger py-4 rounded">Php playground</h1>
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
            <br>

        </div>
    </main>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>