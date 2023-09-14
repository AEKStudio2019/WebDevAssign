<?php
    $icon = "resources/images/function-variant.png";
    $logo = "mdi-function-variant";
    $title = "NUMBER FUNCTIONS";

    include("shared/header.php");
?>

<div class="body_contents">
    <?php
        $arrayFuns = array(
            "abs()" => "&emsp;&emsp;This function returns the positive value of a number, which means the returned value between 0 and positive infinity.",
            "pow()" => "&emsp;&emsp;This function returns the result of the first argument powers of the second argument.",
            "sqrt()" => "&emsp;&emsp;This function returns the square root of a positive number or zero. If the number is negative, the function will return that the result is not a number.",
            "fmod()" => "&emsp;&emsp;This function returns the remainder of the first argument divided by the second argument.",
            "rand()" => "&emsp;&emsp;This function generates a random integer number between 0 and positive infinity and then returns the number. There are two optional parameters in order to control the scope of the generated number, the first parameter specifies the minimum number and the second parameter specifies the maximum number.",
            "round()" => "&emsp;&emsp;This function returns a rounded floating-point number. The first two parameters are the most used. The first parameter is required, and it holds the specified number to round while the second parameter is optional, and it specifies the number of decimal digits to round.",
            "ceil()" => "&emsp;&emsp;This function rounds a floating-point number <strong>UP</strong> to the nearest integer number and then returns it. The function has just one parameter that holds the specified number to round.",
            "floor()" => "&emsp;&emsp;This function rounds a floating-point number <strong>DOWN</strong> to the nearest integer number and then returns it. The function has just one parameter that holds the specified number to round."
        );

        $arrayCodes = array(
            "abs()" => '
                $numbers = array(3.5, -6.5);<br>
                <br>
                foreach($numbers as $value)<br>
                &emsp;&emsp;echo("|$value| = ".abs($value));<br>
            ',

            "pow()" => '
                $bases_powers = array(2 => 5, 3.5 => -2, -3 => 7);<br>
                <br>
                foreach($bases_powers as $base => $power)<br>
                &emsp;&emsp;echo("$base ^ $power = ".pow($base, $power));<br>
            ',
            
            "sqrt()" => '
                $numbers = array(25, -25);<br>
                <br>
                foreach($numbers as $value)<br>
                &emsp;&emsp;echo("$value ^ 1/2 = ".sqrt($value));<br>
            ',

            "fmod()" => '
                $dividends_divisors = array(7 => 5, 4 => 2, 5 => 7);<br>
                <br>
                foreach($dividends_divisors as $dividend => $divisor)<br>
                &emsp;&emsp;echo("$dividend % $divisor = ".fmod($dividend, $divisor));<br>
            ',

            "rand()" => '
                echo("The first generated number is ".rand().".");<br>
                echo("The second generated number is ".rand(0, 50)." and it is always between 0 and 50.");<br>
            ',

            "round()" => '
                $numbers = array(3.209, 3.5, -3.4, -3.78);<br>
                <br>
                foreach($numbers as $value)<br>
                &emsp;&emsp;echo("$value ~= ".round($value));<br>
                foreach($numbers as $value)<br>
                &emsp;&emsp;echo("$value ~= ".round($value, 1));<br>
            ',

            "ceil()" => '
                $numbers = array(3.209, 3.5, -3.4, -3.78);<br>
                <br>
                foreach($numbers as $value)<br>
                &emsp;&emsp;echo("$value ~= ".ceil($value));<br>
            ',

            "floor()" => '
                $numbers = array(3.209, 3.5, -3.4, -3.78);<br>
                <br>
                foreach($numbers as $value)<br>
                &emsp;&emsp;echo("$value ~= ".floor($value));<br>
            '
        );

        function fun_abs()
        {
            $numbers = array(3.5, -6.5);
                
            foreach($numbers as $value)
                echo("|$value| = ".abs($value)), "<br>";
        }

        function fun_pow()
        {
            $bases_powers = array(2 => 5, 3.5 => -2, -3 => 7);
            
            foreach($bases_powers as $base => $power)
                echo("$base ^ $power = ".pow($base, $power)), "<br>";
        }

        function fun_sqrt()
        {
            $numbers = array(25, -25);
                
            foreach($numbers as $value)
                echo("$value ^ 1/2 = ".sqrt($value)), "<br>";
        }

        function fun_fmod()
        {
            $dividends_divisors = array(7 => 5, 4 => 2, 5 => 7);
                
            foreach($dividends_divisors as $dividend => $divisor)
                echo("$dividend % $divisor = ".fmod($dividend, $divisor)), "<br>";
        }

        function fun_rand()
        {
            echo("The first generated number is <b>".rand()."</b>."), "<br>";
            echo("The second generated number is <b>".rand(0, 50)."</b> and it is always between 0 and 50."), "<br>";
        }

        function fun_round()
        {
            $numbers = array(3.209, 3.5, -3.4, -3.78);
                
            foreach($numbers as $value)
                echo("$value ~= ".round($value)), "&emsp;&emsp;";
            echo "<br><br>";
            foreach($numbers as $value)
                echo("$value ~= ".round($value, 1)), "&emsp;&emsp;";
            echo "<br>";
        }

        function fun_ceil()
        {
            $numbers = array(3.209, 3.5, -3.4, -3.78);
                
            foreach($numbers as $value)
                echo("$value ~= ".ceil($value)), "&emsp;&emsp;";
        }

        function fun_floor()
        {
            $numbers = array(3.209, 3.5, -3.4, -3.78);
                
            foreach($numbers as $value)
                echo("$value ~= ".floor($value)), "&emsp;&emsp;";
        }

        foreach($arrayFuns as $key => $value)
        {
            ?>
            <article>
                <h1><?php echo $key;?></h1>
                <div class="artical_contents">
                    <p class="description"><?php echo $value;?></p>
                    <div class="code">
                        <p>
                            <?php echo $arrayCodes[$key]; ?>
                        </p>
                    </div>
                    <div class="result">
                        <p>
                            <?php
                                switch($key)
                                {
                                    case "abs()":
                                        fun_abs();
                                        break;
                                    case "pow()":
                                        fun_pow();
                                        break;
                                    case "sqrt()":
                                        fun_sqrt();
                                        break;
                                    case "fmod()":
                                        fun_fmod();
                                        break;
                                    case "rand()":
                                        fun_rand();
                                        break;
                                    case "round()":
                                        fun_round();
                                        break;
                                    case "ceil()":
                                        fun_ceil();
                                        break;
                                    case "floor()":
                                        fun_floor();
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </article>
            <?php
        }
    ?>
</div>

<?php
    include("shared/footer.php");
?>