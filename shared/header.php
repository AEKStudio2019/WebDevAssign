<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AEK</title>

        <link rel="stylesheet" href="resources/mdi/css/materialdesignicons.css">
        <link rel="stylesheet" href="resources/style.css">

        <?php 
            global $icon;
            echo "<link rel=\"shortcut icon\" href=$icon>";
        ?>
    </head>

    <body>
        <header>
            <?php
                global $logo, $title;
                echo "<h1><span class=\"mdi ".$logo."\"></span> $title</h1>"
            ?>
            <div class="menu">
                <a href="index.php">HOME</a>
                <a href="chess.php">CHESS</a>
                <a href="array_functions.php">ARRAY FUNCTIONS</a>
                <a href="number_functions.php">NUMBER FUNCTIONS</a>
                <a href="string_functions.php">STRING FUNCTIONS</a>
                <a href="more_functions.php">MORE FUNCTIONS</a>
                <a href="algebra.php">ALGEBRA</a>
            </div>
        </header>