<?php
    $icon = "resources/images/function-variant.png";
    $logo = "mdi-function-variant";
    $title = "STRING FUNCTIONS";

    include("shared/header.php");
?>

<div class="body_contents">
    <?php
        $arrayFuns = array(
            "strtolower()" => "&emsp;&emsp;This function converts a whole string to <strong>a lowercase</strong> and then returns the new string. The function has just one parameter that holds the specified string to convert.",
            "strtoupper()" => "&emsp;&emsp;This function converts a whole string to <strong>a uppercase</strong> and then returns the new string. The function has just one parameter that holds the specified string to convert.",
            "strpos()" => "&emsp;&emsp;This function returns the first index of the first appearance of the second parameter in the first parameter. The third parameter is optional and specifies where to begin the search, also If it is a negative number, it counts from the end of the string. This function is case-sensitive.",
            "strlen()" => "&emsp;&emsp;This function returns the length (the number of characters) of a string. The function has just one parameter that holds the specified string to get its length.",
            "ucfirst()" => "&emsp;&emsp;This function capitalizes the first character of a string. The function has just one parameter that holds the specified string to capitalize.",
            "ucwords()" => "&emsp;&emsp;This function capitalizes the first character of each word of a string. The function has just one parameter that holds the specified string to capitalize.",
            "strstr()" => "&emsp;&emsp;This function searches for a specific string inside another string and then returns the rest of the string. The first parameter holds the destinated string for searching, and the second parameter holds the string to search for.",
            "strchr()" => "&emsp;&emsp;This function searches for a specific string inside another string and then returns the rest of the string. The first parameter holds the destinated string for searching, and the second parameter holds the string to search for. The function is an alias the <strong>strstr()</strong> function.",
            "substr()" => "&emsp;&emsp;This function returns a part of a string. The first parameter specifies the string to return a part of. The second parameter specifies where to start in the string, where a positive number means starting from the beginning of the string, and a negative number means starting from the end of the string. The third parameter is optional, and it specifies the length of the returned string.",
            "str_repeat()" => "&emsp;&emsp;This function repeats a string a specified number of times. The first parameter holds the string to repeat. The second parameter specifies the number of times the string will be repeated.",
            "str_replace()" => "&emsp;&emsp;This function replaces a substring with another string and then returns the new string. The first parameter specifies the value to find. The second parameter specifies the value to replace the value in the first parameter. The third parameter holds the string to be searched. The fourth parameter is optional, and it holds a variable to get the number of replacements.",
            "substr_replace()" => "&emsp;&emsp;This function replaces a part of a string with another string and then returns the new string. The first parameter holds the original string. The second parameter specifies the string to be inserted. The third parameter specifies where to start replacing the first parameter. The fourth parameter is optional, and it specifies how many characters should be replaced.",
            "str_word_count()" => "&emsp;&emsp;This function returns the number of words in a string. The function has just one parameter that holds the string to be counted."
        );

        $arrayCodes = array(
            "strtolower()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("My name is ".strtolower($my_name).".");<br>
            ',

            "strtoupper()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("My name is ".strtoupper($my_name).".");<br>
            ',

            "strpos()" => '
                $my_name = "Ahmed Ehab Saleh Ahmed Al-Kataby";<br>
                echo("The index of \"Ahmed\" from the beginning is ".strpos($my_name, "Ahmed").".");<br>
                echo("The index of \"Ahmed\" from the end is ".strpos($my_name, "Ahmed", 5).".");<br>
            ',
            
            "strlen()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("The length of my name is ".strlen($my_name).".");<br>
            ',

            "ucfirst()" => '
                $my_name = "ahmed ehab saleh al-kataby";<br>
                echo("My name after capitalizing the first letter is ".ucfirst($my_name).".");<br>
            ',

            "ucwords()" => '
                $my_name = "ahmed ehab saleh al-kataby";<br>
                echo("My name after capitalizing the first letter of each word is ".ucwords($my_name).".");<br>
            ',

            "strstr()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("My father name is ".strstr($my_name, "Ehab").".");<br>
            ',
            
            "strchr()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("My father name is ".strchr($my_name, "Ehab").".");<br>
            ',

            "substr()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("My father name is ".substr($my_name, 6).".");<br>
                echo("My father name is ".substr($my_name, 6, 10).".");<br>
            ',

            "str_repeat()" => '
                $laughing = "lol ";<br>
                echo(str_repeat($laughing, 5));<br>
            ',

            "str_replace()" => '
                $my_name = "Ahmed Ehab Saleh Ahmed Al-Kataby";<br>
                $replace_no = 0;<br>
                <br>
                echo("Another name is ".str_replace("Ahmed", "Ali", $my_name, $replace_no).".The number of replacement is $replace_no.");<br>
            ',

            "substr_replace()" => '
                $my_name = "Ahmed Al-Kataby";<br>
                $friend_surename = "Al-Kateeb";<br>
                <br>
                echo("My friend name is ".substr_replace($my_name, $friend_surename, strpos($my_name, "Al-Kataby")).".");<br>
            ',

            "str_word_count()" => '
                $my_name = "Ahmed Ehab Saleh Al-Kataby";<br>
                echo("The number of words on my name is ".str_word_count($my_name).".");<br>
            '
        );

        function fun_strtolower()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("My name is <b>".strtolower($my_name)."</b>."), "<br>";
        }

        function fun_strtoupper()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("My name is <b>".strtoupper($my_name)."</b>."), "<br>";
        }

        function fun_strpos()
        {
            $my_name = "Ahmed Ehab Saleh Ahmed Al-Kataby";
            echo("The index of \"Ahmed\" from the beginning is <b>".strpos($my_name, "Ahmed")."</b>."), "<br>";
            echo("The index of \"Ahmed\" from the end is <b>".strpos($my_name, "Ahmed", 5)."</b>."), "<br>";
        }

        function fun_strlen()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("The length of my name is <b>".strlen($my_name)."</b>."), "<br>";
        }

        function fun_ucfirst()
        {
            $my_name = "ahmed ehab saleh al-kataby";
            echo("My name after capitalizing the first letter is <b>".ucfirst($my_name)."</b>."), "<br>";
        }

        function fun_ucwords()
        {
            $my_name = "ahmed ehab saleh al-kataby";
            echo("My name after capitalizing the first letter of each word is <b>".ucwords($my_name)."</b>."), "<br>";
        }

        function fun_strstr()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("My father name is <b>".strstr($my_name, "Ehab")."</b>."), "<br>";
        }

        function fun_strchr()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("My father name is <b>".strchr($my_name, "Ehab")."</b>."), "<br>";
        }

        function fun_substr()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("My father name is <b>".substr($my_name, 6)."</b>."), "<br>";
            echo("My father name is <b>".substr($my_name, 6, 10)."</b>."), "<br>";
        }

        function fun_str_repeat()
        {
            $laughing = "<b>lol</b> ";
            echo(str_repeat($laughing, 5));
        }

        function fun_str_replace()
        {
            $my_name = "Ahmed Ehab Saleh Ahmed Al-Kataby";
            $replace_no = 0;

            echo("Another name is <b>".str_replace("Ahmed", "Ali", $my_name, $replace_no)."</b>.<br>The number of replacement is $replace_no."), "<br>";
        }

        function fun_substr_replace()
        {
            $my_name = "Ahmed Al-Kataby";
            $friend_surename = "Al-Kateeb";

            echo("My friend name is <b>".substr_replace($my_name, $friend_surename, strpos($my_name, "Al-Kataby"))."</b>."), "<br>";
        }

        function fun_str_word_count()
        {
            $my_name = "Ahmed Ehab Saleh Al-Kataby";
            echo("The number of words on my name is <b>".str_word_count($my_name)."</b>."), "<br>";
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
                                    case "strtolower()":
                                        fun_strtolower();
                                        break;
                                    case "strtoupper()":
                                        fun_strtoupper();
                                        break;
                                    case "strpos()":
                                        fun_strpos();
                                        break;
                                    case "strlen()":
                                        fun_strlen();
                                        break;
                                    case "ucfirst()":
                                        fun_ucfirst();
                                        break;
                                    case "ucwords()":
                                        fun_ucwords();
                                        break;
                                    case "strstr()":
                                        fun_strstr();
                                        break;
                                    case "strchr()":
                                        fun_strchr();
                                        break;
                                    case "substr()":
                                        fun_substr();
                                        break;
                                    case "str_repeat()":
                                        fun_str_repeat();
                                        break;
                                    case "str_replace()":
                                        fun_str_replace();
                                        break;
                                    case "substr_replace()":
                                        fun_substr_replace();
                                        break;
                                    case "str_word_count()":
                                        fun_str_word_count();
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