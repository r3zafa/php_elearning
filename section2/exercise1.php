<?php
# Directory Index (dirindex.php)
#
# Reads the current directory's content and displays it as
# HTML.  Useful if file listing is denied by the web server
# configuration.
#
# Installation:
# - Put in any directory you like on your PHP-capable webspace.
# - Rename to 'index.php' if you like it to get called if no
#   file is specified in the URL (e.g. www.example.com/files/).
# - Fit the design to your needs just using HTML and CSS.
#
# Changes since original release (25-Mar-2002):
# - simplified and modernized markup and styles (HTML5, CSS3,
#   list instead of table)
# - more functional programming approach
# - improved configurability
# - escaping of HTML characters
# - license changed from GPL to MIT
# - requires PHP 5.3.0 or later
#
# Version: 25-May-2011
# Copyright (c) 2002, 2011 Jochen Kupperschmidt <http://homework.nwsnet.de/>
# Released under the terms of the MIT license
# <http://www.opensource.org/licenses/mit-license.php>


### configuration

# Show the local path. Disable this for security reasons.
define('SHOW_PATH', TRUE);

# Show a link to the parent directory ('..').
define('SHOW_PARENT_LINK', TRUE);

# Show "hidden" directories and files, i.e. those whose names
# start with a dot.
define('SHOW_HIDDEN_ENTRIES', TRUE);

### /configuration


function get_grouped_entries($path)
{
    list($dirs, $files) = collect_directories_and_files($path);
    $dirs = filter_directories($dirs);
    $files = filter_files($files);
    return array_merge(
        array_fill_keys($dirs, TRUE),
        array_fill_keys($files, FALSE)
    );
}

function collect_directories_and_files($path)
{
    # Retrieve directories and files inside the given path.
    # Also, `scandir()` already sorts the directory entries.
    $entries = scandir($path);
    return array_partition($entries, function ($entry) {
        return is_dir($entry);
    });
}

function array_partition($array, $predicate_callback)
{
    # Partition elements of an array into two arrays according
    # to the boolean result from evaluating the predicate.
    $results = array_fill_keys(array(1, 0), array());
    foreach ($array as $element) {
        array_push(
            $results[(int) $predicate_callback($element)],
            $element
        );
    }
    return array($results[1], $results[0]);
}

function filter_directories($dirs)
{
    # Exclude directories. Adjust as necessary.
    return array_filter($dirs, function ($dir) {
        return $dir != '.'  # current directory
            && (SHOW_PARENT_LINK || $dir != '..') # parent directory
            && !is_hidden($dir);
    });
}

function filter_files($files)
{
    # Exclude files. Adjust as necessary.
    return array_filter($files, function ($file) {
        return !is_hidden($file)
            && substr($file, -4) != '.php'  # PHP scripts
            && substr($file, -4) != '.css'  # css scripts
            && substr($file, -4) != '.js'  # js scripts
            && substr($file, -4) != '.html';  # PHP scripts

    });
}

function is_hidden($entry)
{
    return !SHOW_HIDDEN_ENTRIES
        && substr($entry, 0, 1) == '.'  # Name starts with a dot.
        && $entry != '.'  # Ignore current directory.
        && $entry != '..';  # Ignore parent directory.
}

$path = __DIR__ . '/';
$entries = get_grouped_entries($path);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Exercise 1</title>
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-dark bg-primary fixed-top">
        <a class="navbar-brand px-4" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-dice-3-fill" viewBox="0 0 19 20">
                <path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
            </svg>
            Php eLearning
        </a>
        <h4 class="text-warning"> Files </h4>
        <a class="navbar-brand btn btn-outline-warning ml-5 mr-5" href="../index.php" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 19 20">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            back
        </a>
    </nav>
    <br>

    <main role="main" class="container bg-light mt-5">
        <div class="row g-3 g-lg-4 pb-5 px-5 text-dark">

            <div class="col-12 col-lg-12">
                <div class="card border-warning border-3 bg-light py-5 px-5">
                    <h1>Content of <?php echo SHOW_PATH ? '<em>' . $path . '</em>' : 'this directory'; ?></h1>
                    <hr>
                    <ol>
                        <?php
                        foreach ($entries as $entry => $is_dir) {
                            $class_name = $is_dir ? 'directory' : 'file';
                            $escaped_entry = htmlspecialchars($entry);
                            printf(
                                '        <li class="%s"><a href="%s">%s</a></li>' . "\n",
                                $class_name,
                                $escaped_entry,
                                $escaped_entry
                            );
                        }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </main>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>