<?php
    $icon = "resources/images/function-variant.png";
    $logo = "mdi-function-variant";
    $title = "MORE FUNCTIONS";

    include("shared/header.php");
?>

<div class="body_contents">
    <?php
        $arrayFuns = array(
            "var_dump()" => "&emsp;&emsp;This function returns information about one or more variables. This information is the type and the value of variables.",
            "gettype()" => "&emsp;&emsp;This function returns the type of a variable.",
            "is_int()" => "&emsp;&emsp;This function checks if a variable is of type integer or not. The function returns true if the variable is of type integer, otherwise, it returns false. The function is an alias of <strong>is_integer()</strong>.",
            "is_float()" => "&emsp;&emsp;This function checks if a variable is of type float or not. The function returns true if the variable is of type float, otherwise, it returns false. The function is an alias of <strong>is_double()</strong>.",
            "is_numeric()" => "&emsp;&emsp;This function checks if a variable is a number or a numeric string. The function returns true if the variable is a number or a numeric string, otherwise, it returns false.",
            "is_array()" => "&emsp;&emsp;This function checks if a variable is an array or not. The function returns true if the variable is an array, otherwise, it returns false.",
            "is_bool()" => "&emsp;&emsp;This function checks if a variable is a boolean or not. The function returns true if the variable is a boolean, otherwise, it returns false.",
            "is_null()" => "&emsp;&emsp;This function checks if a variable is NULL or not. The function returns true if the variable is NULL, otherwise, it returns false.",
            "is_string()" => "&emsp;&emsp;This function checks if a variable is of type string or not. The function returns true if the variable is of type string, otherwise, it returns false.",
            "isset()" => "&emsp;&emsp;This function checks if a variable is set, which means that it has to be declared and is not NULL. The function returns true if the variable exists and is not NULL, otherwise, it returns false.",
            "empty()" => "&emsp;&emsp;This function checks if a variable is empty or not. The function returns false if the variable exists and is not empty, otherwise, it returns true."
        );

        $arrayCodes = array(
            "var_dump()" => '
                $arrayVars = array(2, "Ahmed", 2.8, false, null);<br>
                <br>
                print_r(var_dump($arrayVars));<br>
            ',

            "gettype()" => '
                $arrayVars = array(2, "Ahmed", 2.8, false, null);<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo(gettype($value));<br>
            ',

            "is_int()" => '
                $arrayVars = array(2, "Ahmed", 2.8);<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo("Is $value an integer? "), (is_int($value)? "Yes, it is." : "No, it is not.");<br>
            ',
            
            "is_float()" => '
                $arrayVars = array(2, "Ahmed", 2.8);<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo("Is $value a float? "), (is_float($value)? "Yes, it is." : "No, it is not.");<br>
            ',

            "is_numeric()" => '
                $arrayVars = array(2, "Ahmed", 2.8, "9");<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo("Is $value a number? "), (is_numeric($value)? "Yes, it is." : "No, it is not.");<br>
            ',

            "is_array()" => '
                $arrayVars = array(2, "Ahmed", 2.8, "9");<br>
                $notArray = "Ehab";<br>
                $combineArrays = array($arrayVars, $notArray);<br>
                <br>
                foreach($combineArrays as $var)<br>
                &emsp;&emsp;echo(is_array($var)? "Yes, it is an array." : "No, it is not an array.");<br>
            ',

            "is_bool()" => '
                $arrayVars = array(2, "Ahmed", 2.8, false);<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo(is_bool($value)? "Yes, it is a boolean." : "No, it is not a boolean.");<br>
            ',
            
            "is_null()" => '
                $arrayVars = array(NULL, "Ahmed", null, 3);<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo(is_null($value)? "Yes, it is NULL." : "No, it is not NULL.");<br>
            ',

            "is_string()" => '
                $arrayVars = array(2, "Ahmed", 2.8);<br>
                <br>
                foreach($arrayVars as $value)<br>
                &emsp;&emsp;echo("Is $value a string? "), (is_string($value)? "Yes, it is." : "No, it is not.");<br>
            ',

            "isset()" => '
                $arrayVars = array("Ahmed", null, 0);<br>
                <br>
                for($i = 0; $i < 4; $i++)<br>
                &emsp;&emsp;echo(isset($arrayVars[$i])? "Yes, it is set." : "No, it is not set.");<br>
            ',

            "empty()" => '
                $arrayVars = array("Ahmed", null, 0);<br>
                <br>
                for($i = 0; $i < 4; $i++)<br>
                &emsp;&emsp;echo(empty($arrayVars[$i])? "Yes, it is empty." : "No, it is not empty.");<br>
            '
        );

        function fun_var_dump()
        {
            $arrayVars = array(2, "Ahmed", 2.8, false, null);

            echo "<pre>";
            print_r(var_dump($arrayVars));
            echo "</pre>";
        }

        function fun_gettype()
        {
            $arrayVars = array(2, "Ahmed", 2.8, false, null);

            foreach($arrayVars as $value)
                echo(gettype($value)), "<br>";
        }

        function fun_is_int()
        {
            $arrayVars = array(2, "Ahmed", 2.8);

            foreach($arrayVars as $value)
                echo("Is $value an integer? "), (is_int($value)? "Yes, it is." : "No, it is not."), "<br>";
        }

        function fun_is_float()
        {
            $arrayVars = array(2, "Ahmed", 2.8);

            foreach($arrayVars as $value)
                echo("Is $value a float? "), (is_float($value)? "Yes, it is." : "No, it is not."), "<br>";
        }

        function fun_is_numeric()
        {
            $arrayVars = array(2, "Ahmed", 2.8, "9");

            foreach($arrayVars as $value)
                echo("Is $value a number? "), (is_numeric($value)? "Yes, it is." : "No, it is not."), "<br>";
        }

        function fun_is_array()
        {
            $arrayVars = array(2, "Ahmed", 2.8, "9");
            $notArray = "Ehab";
            $combineArrays = array($arrayVars, $notArray);

            foreach($combineArrays as $var)
                echo(is_array($var)? "Yes, it is an array." : "No, it is not an array."), "<br>";
        }

        function fun_is_bool()
        {
            $arrayVars = array(2, "Ahmed", 2.8, false);

            foreach($arrayVars as $value)
                echo(is_bool($value)? "Yes, it is a boolean." : "No, it is not a boolean."), "<br>";
        }

        function fun_is_null()
        {
            $arrayVars = array(NULL, "Ahmed", null, 3);

            foreach($arrayVars as $value)
                echo(is_null($value)? "Yes, it is NULL." : "No, it is not NULL."), "<br>";
        }

        function fun_is_string()
        {
            $arrayVars = array(2, "Ahmed", 2.8);

            foreach($arrayVars as $value)
                echo("Is $value a string? "), (is_string($value)? "Yes, it is." : "No, it is not."), "<br>";
        }

        function fun_isset()
        {
            $arrayVars = array("Ahmed", null, 0);

            for($i = 0; $i < 4; $i++)
                echo(isset($arrayVars[$i])? "Yes, it is set." : "No, it is not set."), "<br>";
        }

        function fun_empty()
        {
            $arrayVars = array("Ahmed", null, 0);

            for($i = 0; $i < 4; $i++)
                echo(empty($arrayVars[$i])? "Yes, it is empty." : "No, it is not empty."), "<br>";
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
                                    case "var_dump()":
                                        fun_var_dump();
                                        break;
                                    case "gettype()":
                                        fun_gettype();
                                        break;
                                    case "is_int()":
                                        fun_is_int();
                                        break;
                                    case "is_float()":
                                        fun_is_float();
                                        break;
                                    case "is_numeric()":
                                        fun_is_numeric();
                                        break;
                                    case "is_array()":
                                        fun_is_array();
                                        break;
                                    case "is_bool()":
                                        fun_is_bool();
                                        break;
                                    case "is_null()":
                                        fun_is_null();
                                        break;
                                    case "is_string()":
                                        fun_is_string();
                                        break;
                                    case "isset()":
                                        fun_isset();
                                        break;
                                    case "empty()":
                                        fun_empty();
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