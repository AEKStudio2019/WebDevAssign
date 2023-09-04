<?php 
    $icon = "resources/images/android-studio.png";
    $logo = "mdi-android-studio";
    $title = "ALGEBRA";

    include("shared/header.php");
?>

<div class="body_contents">
   <?php 
        if(isset($_GET['no_equ']))
            setrawcookie("row", $_GET['no_equ'], time() + (86400 * 30), "/");
        $row = $_COOKIE['row'];
    ?>

    <form action="">
        <h2>GAUSSIAN ELIMINATION</h2>
        <?php
            for($i = 0; $i < $row; $i++)
                echo "<input type=\"text\" name=\"equ$i\" placeholder=\"Equation ".($i+1)."\">";
        ?>
        <input type="submit" name="equs_pass" value="CALCULATE">
        <div style="background-color: red;">
            <?php
                if(isset($_GET["equs_pass"]))
                {
                    $equ_arr = array();
                    $var_arr = array();

                    for($i = 0; $i < $row; $i++)
                    {
                        $current_equ = $_GET["equ$i"];
                        $holder = "";
                        
                        for($j = 0; $j < strlen($current_equ); $j++)
                        {
                            $token = $current_equ[$j];

                            if($token == "+" || $token == "-")
                                $holder = (($token == "+")? "" : $token);
                            elseif(($token >= 0 && $token <= 9) || $token == ".")
                                $holder .= $token;
                            elseif($token == " ")
                                continue;
                            elseif($token == "=")
                            {
                                for(++$j; $j < strlen($current_equ); $j++)
                                {
                                    $token = $current_equ[$j];

                                    if($token == " ")
                                        continue;
                                    elseif($token == "+" || $token == "-")
                                        $holder = (($token == "+")? "" : $token);
                                    else
                                        $holder .= $token;
                                }
                                
                                $equ_arr[$i]["="] = $holder;
                            }
                            else
                            {
                                if(empty($holder))
                                    $holder = "1";
                                elseif($holder == "-")
                                    $holder = "-1";
                                
                                array_push($var_arr, $token);

                                $equ_arr[$i][$token] = $holder;
                                $holder = "";
                            }
                        }
                    }

                    $var_arr = array_unique($var_arr);
                    sort($var_arr);
                    for($i = 0; $i < $row; $i++)
                    {
                        foreach($var_arr as $var_name)
                        {
                            if(!array_key_exists($var_name, $equ_arr[$i]))
                                $equ_arr[$i][$var_name] = "0";
                        }

                        ksort($equ_arr[$i]);
                        $equal_value = array_shift($equ_arr[$i]);
                        $equ_arr[$i]["="] = $equal_value;
                    }

                    $step = 0;
                    foreach($var_arr as $column)
                    {
                        $column_arr = array();
                        for($i = $step; $i < $row; $i++)
                            array_push($column_arr, abs($equ_arr[$i][$column]));
                        
                        $highest_value = max($column_arr);
                        if($highest_value == 0)
                        {
                            $step++;
                            continue;
                        }

                        $highest_row = 0;
                        while($highest_row < sizeof($column_arr))
                        {
                            if($highest_value == $column_arr[$highest_row])
                                break;
                            
                            $highest_row++;
                        }
                        $highest_row += $step;

                        $temp_row = $equ_arr[$step];
                        $equ_arr[$step] = $equ_arr[$highest_row];
                        $equ_arr[$highest_row] = $temp_row;

                        $centeral_item = (float)$equ_arr[$step][$column];

                        foreach($equ_arr[$step] as $key => $value)
                            $equ_arr[$step][$key] = ((float)$equ_arr[$step][$key]) / $centeral_item;
                        
                        for($i = $step + 1; $i < $row; $i++)
                        {
                            $under_item = (float)$equ_arr[$i][$column];
                            if($under_item == 0)
                                continue;

                            foreach($equ_arr[$i] as $key => $value)
                                $equ_arr[$i][$key] = (-1 * $under_item * (float)$equ_arr[$step][$key]) + (float)$equ_arr[$i][$key];
                        }

                        $step++;
                    }

                    $step--;
                    $isSolved = false;
                    foreach($var_arr as $key)
                    {
                        if($equ_arr[$step][$key] != 0)
                        {
                            $isSolved = true;
                            break;
                        }
                    }

                    if($isSolved)
                    {
                        $revar_arr = $var_arr;
                        rsort($revar_arr);

                        foreach($revar_arr as $column)
                        {
                            for($i = $step - 1; $i >= 0; $i--)
                            {
                                $above_item = $equ_arr[$i][$column];
                                if($above_item == 0)
                                    continue;

                                foreach($equ_arr[$i] as $key => $value)
                                    $equ_arr[$i][$key] = (-1 * $above_item * $equ_arr[$step][$key]) + $equ_arr[$i][$key];
                            }

                            $step--;
                        }

                        for($i = 0; $i < $row; $i++)
                            echo $var_arr[$i]." = ".$equ_arr[$i]["="], "<br>";
                    }
                    else
                        echo "There is no solution :(";
                }
                else
                    echo "Here the result will show.";
            ?>
        </div>
    </form>
</div>

<?php
    include("shared/footer.php");
?>

