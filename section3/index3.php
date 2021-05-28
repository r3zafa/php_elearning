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
        <h4 class="text-center text-warning"> { Php playground -2 } </h4>
        <a class="navbar-brand btn btn-outline-warning ml-5 mr-5" href="../index.php" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 19 20">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            back
        </a>
    </nav>
    <br>
    <main role="main" class="container bg-light mt-5">
        <div class="row g-3 g-lg-4 pb-5 px-5 text-dark text-center">

            <div class="col-12 col-lg-12">
                <div class="card border-warning border-3 py-5 px-5">
                    <h2 class="mt-2">Inside Job | Pointers</h2>
                    <hr>
                    <?php
                    $Numbers = array(8, 23, 344, 566, 33, 111, 888, 666);
                    print_r($Numbers);
                    ?>
                    <hr>
                    <?php
                    echo "Current pointer place is --> " . current($Numbers) . "<br><hr>";
                    next($Numbers);
                    echo "Next pointer place is: " . current($Numbers) . "<br><hr>"; // we can do it more than 1 times in row
                    next($Numbers);
                    next($Numbers);
                    echo "2xNext pointer place is: " . current($Numbers) . "<br><hr>"; // we can do it more than 1 times in row
                    reset($Numbers);
                    echo "using reset() pointer go back to start point --> " . current($Numbers) . "<br><hr>";
                    end($Numbers);
                    echo "using end() pointer go  to end point --> " . current($Numbers) . "<br><hr>";
                    ?>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="card border-warning border-3 py-5 px-5">
                    <h2 class="mt-2">If Statements</h2>
                    <hr>
                    <p>weather = sunny with if else Statement</p>
                    <?php
                    $weather = "Sunny";
                    if ($weather == "Sunny") {
                        echo "weather is pleasent <br><hr>";
                    } else {
                        echo "it's not pleasent <br><hr> ";
                    }
                    ?>
                    <p>weather2 = rainy with if if Statement</p>
                    <?php
                    $weather2 = "rainy";
                    if ($weather2 == "Sunny") {
                        echo "weather is pleasent <br><hr>";
                    }
                    if ($weather2 != "Sunny") {
                        echo "it's not pleasent <br><hr> ";
                    }
                    ?>

                    <p>weather3 = snow with if ... elseif ... elseif Statement</p>
                    <?php
                    $weather3 = "cloudy";
                    if ($weather3 == "Sunny") {
                        echo "weather is pleasent <br><hr>";
                    } elseif ($weather3 == "rainy") {
                        echo "it's raining <br><hr> ";
                    } elseif ($weather3 == "cloudy") {
                        echo "it's cloudy out there <br><hr> ";
                    }
                    ?>
                    <?php

                    ?>
                </div>
            </div>

        </div>
    </main>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>