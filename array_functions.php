<?php
    $icon = "resources/images/function-variant.png";
    $logo = "mdi-function-variant";
    $title = "ARRAY FUNCTIONS";

    include("shared/header.php");
?>

<div class="body_contents">
    <?php
        $arrayFuns = array(
            "array_key_exists()" => "&emsp;&emsp;This function checks an array for a specified key, and then returns true if the key exists and false if the key does not exist. The key is case-sensitive. See the example below for a complete understanding:-",
            "in_array()" => "&emsp;&emsp;This function searches an array for a specific value, and then returns true if the value is found and false if the value is not found. The search is case-sensitive, and if the third parameter is set to true, the function is going to search the value with the same data type. See the example below for a complete understanding:-",
            "array_search()" => "&emsp;&emsp;This function searches an array for a specified value, and then returns the key of the value if the value is found and false if the value is not found. The search is case-sensitive, and if the third parameter is set to true, the function is going to search the value with the same data type. See the example below for a complete understanding:-",
            "is_array()" => "&emsp;&emsp;This function checks whether a variable is an array or not, and then returns true if the variable is an array and false if the variable is not an array. See the example below for a complete understanding:-",
            "sizeof()" => "&emsp;&emsp;This function returns the number of elements in an array, and it is an alias of the count() function. The function returns the number of elements in all dimensions of an array if the second parameter is set to true and returns the number of elements in the first dimension of an array if the second parameter is set to false or nothing. See the example below for a complete understanding:-",
            "asort()" => "&emsp;&emsp;This function sorts <em>an associative array in ascending order, according to the value</em>. The <strong>arsort()</strong> function sorts <em>an associative array in descending order</em>. The second parameter is optional, and it has many options to choose between them in order to change the way of sort, and the options are:-<br><b>• 0 = SORT_REGULAR - Default. Compare items normally (don't change types)<br>• 1 = SORT_NUMERIC - Compare items numerically<br>• 2 = SORT_STRING - Compare items as strings<br>• 3 = SORT_LOCALE_STRING - Compare items as strings, based on the current locale<br>• 4 = SORT_NATURAL - Compare items as strings using natural ordering</b><br>See the example below for a complete understanding:-",
            "sort()" => "&emsp;&emsp;This function sorts <em>an indexed array in ascending order, according to the value</em>. The <strong>rsort()</strong> function sorts <em>an indexed array in descending order</em>. The second parameter is optional, and it has many options to choose between them in order to change the way of sort, and the options are:-<br><b>• 0 = SORT_REGULAR - Default. Compare items normally (don't change types)<br>• 1 = SORT_NUMERIC - Compare items numerically<br>• 2 = SORT_STRING - Compare items as strings<br>• 3 = SORT_LOCALE_STRING - Compare items as strings, based on the current locale<br>• 4 = SORT_NATURAL - Compare items as strings using natural ordering</b><br>See the example below for a complete understanding:-",
            "ksort()" => "&emsp;&emsp;This function sorts <em>an associative array in ascending order, according to the key</em>. The <strong>krsort()</strong> function sorts <em>an associative array in descending order</em>. The second parameter is optional, and it has many options to choose between them in order to change the way of sort, and the options are:-<br><b>• 0 = SORT_REGULAR - Default. Compare items normally (don't change types)<br>• 1 = SORT_NUMERIC - Compare items numerically<br>• 2 = SORT_STRING - Compare items as strings<br>• 3 = SORT_LOCALE_STRING - Compare items as strings, based on the current locale<br>• 4 = SORT_NATURAL - Compare items as strings using natural ordering</b><br>See the example below for a complete understanding:-",
            "array_shift()" => "&emsp;&emsp;This function removes the first element from an array, and returns the value of the removed element. The function is going to return NULL if the array is empty. If the keys are numeric, all elements will get new keys starting from 0 and increasing by 1. See the example below for a complete understanding:-",
            "array_unshift()" => "&emsp;&emsp;This function inserts new elements at the beginning of the array, and returns the number of elements in the array after inserting. The function can have more than one value. If the keys are numeric, all elements will get new keys starting from 0 and increasing by 1. See the example below for a complete understanding:-",
            "array_unique()" => "&emsp;&emsp;This function removes duplicate values from an array. If more than one value is the same, the first one will be kept and the other will be removed. The function returns an array without any duplicate values. See the example below for a complete understanding:-",
            "array_pop()" => "&emsp;&emsp;This function removes the last element of an array, and returns the value of the removed element. The function is going to return NULL if the array is empty. See the example below for a complete understanding:-",
            "array_push()" => "&emsp;&emsp;This function inserts new elements at the end of the array, and returns the number of elements in the array after inserting. The function can have more than one value. Added elements will always have numeric keys. See the example below for a complete understanding:-"
        );

        $arrayCode = array(
            "array_key_exists()" => '
                $majors = array(<br>
                &emsp;&emsp;"CS" => "Computer Science",<br>
                &emsp;&emsp;"IT" => "Information Technology",<br>
                &emsp;&emsp;"IS" => "Information System"<br>
                );<br>
                $checked_keys = array("CS", "CYS");<br>
                <br>
                foreach($checked_keys as $key)<br>
                &emsp;&emsp;echo (array_key_exists($key, $majors)? $majors[$key] : "$key is not exist :(");<br>
            ',

            "in_array()" => '
                $numbers = array("1", "2", 3);<br>
                $searched_values = array(1, 2, "3");<br>
                <br>
                foreach($searched_values as $value)<br>
                &emsp;&emsp;echo (in_array($value, $numbers)? "$value is found :)" : "$value is not found :(");<br>
                foreach($searched_values as $value)<br>
                &emsp;&emsp;echo (in_array($value, $numbers, <span class="red_mark">true</span>)? "$value is found :)" : "$value is not found :(");<br>
            ',
            
            "array_search()" => '
                $numbers = array(<br>
                &emsp;&emsp;"one" => "1",<br>
                &emsp;&emsp;"two" => "2",<br>
                &emsp;&emsp;"three" => 1<br>
                );<br>
                $searched_values = array(2, 1);<br>
                <br>
                foreach($searched_values as $value)<br>
                &emsp;&emsp;echo "The key of $value is ".array_search($value, $numbers);<br>
                foreach($searched_values as $value)<br>
                &emsp;&emsp;echo "The key of $value is ".array_search($value, $numbers, <span class="red_mark">true</span>);<br>
            ',

            "is_array()" => '
                $an_array = array("CS", "IT", "IS");<br>
                $not_an_array = "CYS";<br>
                $checked_variables = array($an_array, $not_an_array);<br>
                <br>
                for($i = 0; $i < 2; $i++)<br>
                &emsp;&emsp;echo "The element is ".(is_array($checked_variables[$i])? "an array :)" : "not an array :(");<br>
            ',

            "sizeof()" => '
                $majors = array(<br>
                &emsp;&emsp;"CS" => array("Artificial intelligence", "Software Engineering"),<br>
                &emsp;&emsp;"IT" => "Information Technology",<br>
                &emsp;&emsp;"IS" => "Information System"<br>
                );<br>
                <br>
                echo \'The number of elements on the first dimension of $majors is \'.sizeof($majors);<br>
                echo \'The number of elements on the all dimensions of $majors is \'.sizeof($majors, true);<br>
            ',

            "asort()" => '
                $ages = array(<br>
                &emsp;&emsp;"Ahmed" => "21",<br>
                &emsp;&emsp;"Ali" => "23",<br>
                &emsp;&emsp;"Ibrahim" => "20",<br>
                &emsp;&emsp;"Mohammed" => "19",<br>
                &emsp;&emsp;"Abdullah" => "25"<br>
                );<br>
                <span class="red_mark">asort($ages);</span><br>
                <br>
                foreach($ages as $key => $value)<br>
                &emsp;&emsp;echo "$key\'s age is $value";<br>
            ',

            "sort()" => '
                $ages = array(21, "23", "20", 19, "25");<br>
                <span class="red_mark">sort($ages);</span><br>
                <br>
                foreach($ages as $value)<br>
                &emsp;&emsp;echo "The age is $value";<br>
            ',

            "ksort()" => '
                $ages = array(<br>
                &emsp;&emsp;"Ahmed" => "21",<br>
                &emsp;&emsp;"Ali" => "23",<br>
                &emsp;&emsp;"Ibrahim" => "20",<br>
                &emsp;&emsp;"Mohammed" => "19",<br>
                &emsp;&emsp;"Abdullah" => "25"<br>
                );<br>
                <span class="red_mark">ksort($ages);</span><br>
                <br>
                foreach($ages as $key => $value)<br>
                &emsp;&emsp;echo "$key\'s age is $value";<br>
            ',

            "array_shift()" => '
                $ages = array(<br>
                &emsp;&emsp;"Ahmed" => "21",<br>
                &emsp;&emsp;"Ali" => "23",<br>
                &emsp;&emsp;"Ibrahim" => "20",<br>
                &emsp;&emsp;"Mohammed" => "19",<br>
                &emsp;&emsp;"Abdullah" => "25"<br>
                );<br>
                <br>
                echo \'The first element in $ages which is \'.<span class="red_mark">array_shift($ages)</span>.\' is removed successfully.\';<br>
                <br>
                foreach($ages as $key => $value)<br>
                &emsp;&emsp;echo "$key\'s age is $value";<br>
            ',

            "array_unshift()" => '
                $names = array(<br>
                &emsp;&emsp;0 => "Ahmed",<br>
                &emsp;&emsp;1 => "Ali",<br>
                &emsp;&emsp;2 => "Ibrahim",<br>
                &emsp;&emsp;3 => "Mohammed",<br>
                &emsp;&emsp;4 => "Abdullah"<br>
                );<br>
                <br>
                echo \'The number of elements in $names is \'.<span class="red_mark">array_unshift($names, "Ehab", "Ayham")</span>;<br>
                <br>
                foreach($names as $key => $value)<br>
                &emsp;&emsp;echo "$value\'s ID is $key";<br>
            ',

            "array_unique()" => '
                $names = array(<br>
                &emsp;&emsp;0 => "Ahmed",<br>
                &emsp;&emsp;1 => "Ali",<br>
                &emsp;&emsp;2 => "Ibrahim",<br>
                &emsp;&emsp;3 => "Ahmed",<br>
                &emsp;&emsp;4 => "Ibrahim"<br>
                );<br>
                $names = <span class="red_mark">array_unique($names)</span>;<br>
                <br>
                foreach($names as $key => $value)<br>
                &emsp;&emsp;echo "$value\'s ID is $key";<br>
            ',

            "array_pop()" => '
                $ages = array(<br>
                &emsp;&emsp;"Ahmed" => "21",<br>
                &emsp;&emsp;"Ali" => "23",<br>
                &emsp;&emsp;"Ibrahim" => "20",<br>
                &emsp;&emsp;"Mohammed" => "19",<br>
                &emsp;&emsp;"Abdullah" => "25"<br>
                );<br>
                <br>
                echo \'The last element in $ages which is \'.<span class="red_mark">array_pop($ages)</span>.\' is removed successfully.\';<br>
                <br>
                foreach($ages as $key => $value)<br>
                &emsp;&emsp;echo "$key\'s age is $value";<br>
            ',

            "array_push()" => '
                $names = array(<br>
                &emsp;&emsp;0 => "Ahmed",<br>
                &emsp;&emsp;1 => "Ali",<br>
                &emsp;&emsp;2 => "Ibrahim",<br>
                &emsp;&emsp;3 => "Mohammed",<br>
                &emsp;&emsp;4 => "Abdullah"<br>
                );<br>
                <br>
                echo \'The number of elements in $names is \'.<span class="red_mark">array_push($names, "Ehab", "Ayham")</span>;<br>
                <br>
                foreach($names as $key => $value)<br>
                &emsp;&emsp;echo "$value\'s ID is $key";<br>
            '
        );

        function fun_array_key_exists()
        {
            $majors = array(
                "CS" => "Computer Science",
                "IT" => "Information Technology",
                "IS" => "Information System"
            );
            $checked_keys = array("CS", "CYS");
            
            foreach($checked_keys as $key)
                echo (array_key_exists($key, $majors)? $majors[$key] : "$key is not exist :("), "<br>";
        }

        function fun_in_array()
        {
            $numbers = array("1", "2", 3);
            $searched_values = array(1, 2, "3");
            
            foreach($searched_values as $value)
                echo (in_array($value, $numbers)? "$value is found :)" : "$value is not found :("), "<br>";
            foreach($searched_values as $value)
                echo (in_array($value, $numbers, true)? "$value is found :)" : "$value is not found :("), "<br>";
        }

        function fun_array_search()
        {
            $numbers = array(
                "one" => "1",
                "two" => "2",
                "three" => 1
            );
            $searched_values = array(1, 2);
            
            foreach($searched_values as $value)
                echo "The key of $value is ".array_search($value, $numbers), "<br>";
            foreach($searched_values as $value)
                echo "The key of $value is ".array_search($value, $numbers, true), "<br>";
        }

        function fun_is_array()
        {
            $an_array = array("CS", "IT", "IS");
            $not_an_array = "CYS";
            $checked_variables = array($an_array, $not_an_array);
            
            for($i = 0; $i < 2; $i++)
                echo "The element is ".(is_array($checked_variables[$i])? "an array :)" : "not an array :("), "<br>";
        }

        function fun_sizeof()
        {
            $majors = array(
                "CS" => array("Artificial intelligence", "Software Engineering"),
                "IT" => "Information Technology",
                "IS" => "Information System"
            );
            
            echo 'The number of elements on the first dimension of $majors is '.sizeof($majors), "<br>";
            echo 'The number of elements on the all dimensions of $majors is '.sizeof($majors, true);
        }

        function fun_asort()
        {
            $ages = array(
                "Ahmed" => "21",
                "Ali" => "23",
                "Ibrahim" => "20",
                "Mohammed" => "19",
                "Abdullah" => "25"
            );
            asort($ages);

            foreach($ages as $key => $value)
                echo "$key's age is $value", "<br>";
        }

        function fun_sort()
        {
            $ages = array(21, "23", "20", 19, "25");
            sort($ages);

            foreach($ages as $value)
                echo "The age is $value", "<br>";
        }

        function fun_ksort()
        {
            $ages = array(
                "Ahmed" => "21",
                "Ali" => "23",
                "Ibrahim" => "20",
                "Mohammed" => "19",
                "Abdullah" => "25"
            );
            ksort($ages);

            foreach($ages as $key => $value)
                echo "$key's age is $value", "<br>";
        }

        function fun_array_shift()
        {
            $ages = array(
                "Ahmed" => "21",
                "Ali" => "23",
                "Ibrahim" => "20",
                "Mohammed" => "19",
                "Abdullah" => "25"
            );
            
            echo 'The first element in $ages which is '.array_shift($ages).' is removed successfully.', "<br><br>";

            foreach($ages as $key => $value)
                echo "$key's age is $value", "<br>";
        }

        function fun_array_unshift()
        {
            $names = array(
                0 => "Ahmed",
                1 => "Ali",
                2 => "Ibrahim",
                3 => "Mohammed",
                4 => "Abdullah"
            );
            
            echo 'The number of elements in $names is '.array_unshift($names, "Ehab", "Ayham"), "<br><br>";

            foreach($names as $key => $value)
                echo "$value's ID is $key", "<br>";
        }

        function fun_array_unique()
        {
            $names = array(
                0 => "Ahmed",
                1 => "Ali",
                2 => "Ibrahim",
                3 => "Ahmed",
                4 => "Ibrahim"
            );
            $names = array_unique($names);

            foreach($names as $key => $value)
                echo "$value's ID is $key", "<br>";
        }

        function fun_array_pop()
        {
            $ages = array(
                "Ahmed" => "21",
                "Ali" => "23",
                "Ibrahim" => "20",
                "Mohammed" => "19",
                "Abdullah" => "25"
            );
            
            echo 'The last element in $ages which is '.array_pop($ages).' is removed successfully.', "<br><br>";

            foreach($ages as $key => $value)
                echo "$key's age is $value", "<br>";
        }

        function fun_array_push()
        {
            $names = array(
                0 => "Ahmed",
                1 => "Ali",
                2 => "Ibrahim",
                3 => "Mohammed",
                4 => "Abdullah"
            );
            
            echo 'The number of elements in $names is '.array_push($names, "Ehab", "Ayham"), "<br><br>";

            foreach($names as $key => $value)
                echo "$value's ID is $key", "<br>";
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
                            <?php echo $arrayCode[$key]; ?>
                        </p>
                    </div>
                    <div class="result">
                        <p>
                            <?php
                                switch($key)
                                {
                                    case "array_key_exists()":
                                        fun_array_key_exists();
                                        break;
                                    case "in_array()":
                                        fun_in_array();
                                        break;
                                    case "array_search()":
                                        fun_array_search();
                                        break;
                                    case "is_array()":
                                        fun_is_array();
                                        break;
                                    case "sizeof()":
                                        fun_sizeof();
                                        break;
                                    case "asort()":
                                        fun_asort();
                                        break;
                                    case "sort()":
                                        fun_sort();
                                        break;
                                    case "ksort()":
                                        fun_ksort();
                                        break;
                                    case "array_shift()":
                                        fun_array_shift();
                                        break;
                                    case "array_unshift()":
                                        fun_array_unshift();
                                        break;
                                    case "array_unique()":
                                        fun_array_unique();
                                        break;
                                    case "array_pop()":
                                        fun_array_pop();
                                        break;
                                    case "array_push()":
                                        fun_array_push();
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