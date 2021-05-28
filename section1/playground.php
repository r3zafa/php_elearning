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
        <h4 class="text-center text-warning"> { Php playground } </h4>
        <a class="navbar-brand btn btn-outline-warning ml-5 mr-5" href="../index.php" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 19 20">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            back
        </a>
    </nav>
    <br>
    <main role="main" class="container bg-light mt-3">
        <div class="row g-3 g-lg-4 pb-5 px-5 text-dark text-center">

            <div class="col-12 col-lg-12">
                <div class="card border-warning py-5 px-5">
                    <h2 class="mt-2">Strings in php</h2>
                    <hr>
                    <?php
                    $color = "red";
                    $shirt = "sleev-less";
                    $combination = $color . " " . $shirt; //cobination of variables
                    echo "The combination of 2 strings color + shirt is: " . $combination;
                    echo "<br> different between double cotations and single cotations <br>";
                    echo " double cotations of echo color: $color <br>";
                    echo ' single cotations of echo color: $color <br>';
                    echo "{$combination} combination echo is here again but using {} <br>";
                    ?>
                </div>
            </div>
            <div class="col-6 col-lg-6">
                <div class="card border-warning py-5 px-3">

                    <h5 class="mt-3 mb-3">String Functions 1</h5>
                    <hr>
                    <?php
                    $pharase1 = "You are my ";
                    $pharase2 = "last option for today. ";
                    $combi = $pharase1;
                    $combi .= $pharase2; //:= this means -> combi = combi+pharase2;
                    echo "Original full string is: $combi";
                    ?>
                    <hr>
                    <h6 class="mt-2">Upper-/Lowercase</h6>
                    <h6 class="mt-2">Uppercase first letter with ucfirst:</h6>
                    <?php echo ucfirst($pharase2); ?>
                    <hr>
                    <h6 class="mt-2">Uppercase First letters in each Word with ucwords:</h6>
                    <?php echo ucwords($pharase2); ?>
                    <hr>
                    <h6 class="mt-2">find position of any specific word</h6>
                    <?php echo " position of 'are' is: " . strpos($combi, "are"); ?>
                    <hr>
                    <h6 class="mt-2">find character in sentence</h6>
                    <?php echo strchr($combi, "o"); ?>
                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-warning py-5 px-3">
                    <h5 class="mt-3 mb-3">String Functions 2</h5>
                    <hr>
                    <h6 class="mt-2">lowercase with strtolower</h6>
                    <?php echo strtolower($combi); ?>
                    <hr>
                    <h6 class="mt-2">Uppercase with strtoupper</h6>
                    <?php echo strtoupper($combi); ?>
                    <hr>
                    <h6 class="mt-2">repeat string 4 time with str_repeat</h6>
                    <?php echo str_repeat($combi, 4); ?>
                    <hr>
                    <h6 class="mt-2">Make Substring from one point to another with substr</h6>
                    <?php echo substr($combi, 5, 10); ?>
                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-warning py-5 px-3">
                    <h5 class="mt-3 mb-3">String Functions 3</h5>
                    <hr>
                    <h6 class="mt-2">Total lenght of string: </h6>
                    <?php echo "Total lenght of combi: " . strlen($combi); ?>

                    <h6 class="mt-2">Trim:</h6>
                    <?php echo "A " . trim("B c D") . " E"; ?>
                    <hr>
                    <h6 class="mt-2">Find specific and show after</h6>
                    <?php echo strstr($combi, "for"); ?>
                    <hr>
                    <h6 class="mt-2">Replace word with new word:</h6>
                    <?php echo str_replace("You are", "he is", $combi); ?>


                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-danger py-5 px-3">
                    <h5 class="mt-3 mb-3">Echo,Variables & constants</h5>

                    <h6 class="mt-2"> Php echo </h6>
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

                    <h6 class="mt-2">Php variables</h6>
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

                    <h6 class="mt-2">Constants in php</h6>
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
                </div>
            </div>


            <div class="col-6 col-lg-6">
                <div class="card border-dark py-5 px-5">

                    <h5 class="mt-2">Numbers - 1</h5>
                    <?php
                    //INt & float
                    $firstNum = 3;
                    $secondNum = 4;
                    $thirdNum = 3.4545;
                    ?>
                    <hr>
                    <h6 class="mt-2"> Math in Php</h6>
                    <?php
                    echo "3.4545+9-6 is equal to:= " . $thirdNum + 9 - 6;
                    ?>
                    <?php
                    echo "<br> 3.1/6 is equal to:= " . 3.1 / 6;
                    ?>
                    <hr>
                    <h6 class="mt-2"> Ceil of 3.4545: </h6>
                    <?php
                    echo ceil($thirdNum);
                    ?>
                    <hr>
                    <h6 class="mt-2"> Floor of 3.4545: </h6>
                    <?php
                    echo floor($thirdNum);
                    ?>
                </div>
            </div>


            <div class="col-6 col-lg-6">
                <div class="card border-dark py-5 px-5">

                    <h5 class="mt-2">Numbers - 2</h5>
                    <hr>
                    <h6 class="mt-2"> Numbers type </h6>
                    <?php
                    echo "{$firstNum} :integer, true(1)/false(0)? = " . is_int($firstNum);
                    echo "<br>{$thirdNum} :integer, true(1)/false(0)? =" . is_int($thirdNum);
                    echo "<hr><br> {$firstNum} :float, true(1)/false(0)? = " . is_float($firstNum);
                    echo "<br>{$thirdNum} :float, true(1)/false(0)? =" . is_float($thirdNum);
                    echo "<hr><br> {$firstNum} :Numeric, true(1)/false(0)? = " . is_numeric($firstNum);
                    echo "<br>{$thirdNum} :Numeric, true(1)/false(0)? =" . is_numeric($thirdNum);
                    ?>
                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-dark py-5 px-5">

                    <h5 class="mt-2">Numbers - 3</h5>
                    <hr>
                    <h6 class="mt-2"> convert dec->bin and bin->dec mit decbin() and bindec() </h6>
                    <hr>
                    <?php
                    echo "3 in binery: " . decbin(3);
                    echo "<br> 111 in Decimal: " . bindec(111);
                    ?>
                    <hr>
                    <h6 class="mt-2"> sqrt(), abs(), pow(), </h6>
                    <hr>
                    <?php
                    echo "sqrt of 100: " . sqrt(100);
                    echo "<hr><br> Abs of -100 + -50: " . abs(-50 + -100);
                    echo "<hr><br> pow: 10^3: " . pow(10, 3);
                    ?>

                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-dark py-5 px-5">

                    <h5 class="mt-2">Numbers - 4</h5>
                    <hr>
                    <?php
                    echo "<br> fmod 15/7: " . fmod(15, 7);
                    echo "<hr><br>random value: " . rand();
                    echo "<hr><br>random value 500to1600: " . rand(500, 1600);
                    ?>
                    <hr>
                    <h6 class="mt-2"> increase counter+2: </h6>
                    <?php
                    $counter = 4;
                    echo $counter = $counter + 2;
                    ?>
                    <hr>
                    <h6 class="mt-2"> increment counter++: </h6>
                    <?php
                    $counter = 4;
                    $counter++;
                    echo $counter++;
                    ?>
                    <hr>
                    <h6 class="mt-2"> decrement counter--: </h6>
                    <?php
                    $counter = 4;
                    $counter--;
                    echo $counter--;
                    ?>

                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-success py-5 px-5">

                    <h5 class="mt-2">Arrays - 1</h5>
                    <hr>
                    <h6 class="mt-2">index | data for example: 34 | ali </h6>
                    <hr>
                    <h6 class="mt-2"> array name [index] </h6>
                    <?php
                    $name_arr = array('Reza', 'ali', 'nafas');
                    echo "name_arr[2]:= {$name_arr[2]} <br>";
                    ?>
                    <hr>
                    <?php
                    $food = array('pizza', 10, 15, array("asian", "french", "german"), 'pasta');
                    echo "food[0]:{$food[0]} <br>";
                    echo "food[3][1]:{$food[3][1]} <br>";
                    ?>
                    <hr>
                    <h6 class="mt-2">associated array['key'=>'value'] definition</h6>
                    <?php
                    $color_code = array("A" => "40", "B" => "Pizza");
                    echo "color_code['A']:" . $color_code["A"];
                    ?>
                    <hr>
                    <?php
                    $food2 = array("Asian" => "noodle", "Iranian" => "kebab");
                    echo "Iranian food: " . $food2["Iranian"];
                    ?>
                    <hr>
                    <h6>Print_r array food2:</h6>
                    <pre>
                    <?php
                    echo print_r($food2);
                    ?>
                    </pre>

                </div>
            </div>

            <div class="col-6 col-lg-6">
                <div class="card border-success py-5 px-5">

                    <h5 class="mt-2">Arrays - 2</h5>
                    <hr>
                    <h6 class="mt-2">add indexed value to array with array_name[index]="value" and print_r()</h6>
                    <hr>
                    <?php
                    $food[20] = "Orange";
                    $food[30] = "apple";
                    ?>
                    <pre>
                    <?php
                    echo print_r($food);
                    ?>
                    </pre>

                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="card border-warning py-5 px-5">

                    <h5 class="mt-2">Array Funktions</h5>
                    <?php
                    $arr_funk = array("red", "blue", "green");
                    ?>
                    <hr>
                    <h6 class="mt-2"> array_pop()</h6>
                    <?php
                    array_pop($arr_funk);
                    print_r($arr_funk);
                    ?>
                    <hr>
                    <h6 class="mt-2"> array_push()</h6>
                    <?php
                    array_push($arr_funk, "black", "light", "orange");
                    print_r($arr_funk);
                    echo "<hr><br> number of items in array with count(): " . count($arr_funk);
                    ?>
                    <hr>
                    <h6 class="mt-2"> min,max value in array</h6>
                    <?php
                    $numbers_arr = array(450, 1, 3, 6, 88, 121, 143, 454);
                    echo "Max in array is: " . max($numbers_arr);
                    echo "<br> Min in array is:" . min($numbers_arr);
                    echo "<br> is 3 in array using in_array(), Yes/No: " . in_array(3, $numbers_arr);
                    ?>
                    <hr>
                    <h6 class="m-2">Sort item in array with sort()</h6>
                    <?php
                    sort($numbers_arr);
                    echo print_r($numbers_arr);
                    ?>
                    <hr>
                    <h6 class="m-2">reSort item in array with rsort()</h6>
                    <?php
                    rsort($numbers_arr);
                    echo print_r($numbers_arr);
                    ?>

                    <hr>
                    <h6 class="m-2">implode function: add all items in array in a single strings with a given combiner</h6>
                    <?php
                    $quote = array("never", "give", "up", "in", "life");
                    echo  "<br>  implode with plus as combiner: <br>" . implode("+", $quote);
                    echo "<br>  implode with space as combiner: <br> " . implode(" ", $quote);
                    ?>
                    <hr>
                    <h6 class="m-2">explode function: convert a given string to array</h6>
                    <?php
                    $quote_2 = "never give up in life";
                    echo  "<br>  explode (never give up in life): <br>";
                    print_r(explode(" ", $quote_2));
                    ?>

                </div>
            </div>






            <br>

        </div>
    </main>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>