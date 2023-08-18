<?php 
    $icon = "resources/images/chess-queen.png";
    $logo = "mdi-chess-queen";
    $title = "CHESS";

    include("shared/header.php");
?>

<div class="body_contents">
    <table class="page_division">
        <?php
            for($tr = 0; $tr < 3; $tr++)
            {
                echo "<tr>";
                for($td = 0; $td < 3; $td++)
                {
                    if($tr == 1 && $td == 1)
                    {
                        ?>
                        <td id="board_frame">
                            <div class="cells_container">
                                <?php
                                    for($row = 0; $row < 8; $row++)
                                    {
                                        for($column = 0; $column < 8; $column++)
                                        {
                                            $degree = round(rand(0, 360) / 90) * 90;
                                            echo ((($row + $column) % 2 == 0)? "<img style=\"transform: rotate(".$degree."deg);\" src=\"resources/images/Light_Wood_Cell.jpg\" alt=\"cell\" />" : "<img style=\"transform: rotate(".$degree."deg);\" src=\"resources/images/Dark_Wood_Cell.jpg\" alt=\"cell\" />");
                                        }
                                    }
                                ?>
                            </div>
                        </td>
                        <?php
                    }
                    else
                        echo "<td></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</div>

<?php
    include("shared/footer.php");
?>