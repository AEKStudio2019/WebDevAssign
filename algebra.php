<?php 
    $icon = "resources/images/android-studio.png";
    $logo = "mdi-android-studio";
    $title = "ALGEBRA";

    include("shared/header.php");
?>

<div class="body_contents">
    <form class="math_form" action="equation.php">
        <h2>GAUSSIAN ELIMINATION</h2>
        <div class="form_contents">
            <input type="number" name="no_equ" placeholder="Equation Numbers">
            <input type="submit" name="no_pass" value="GO!">
        </div>
    </form>
</div>

<?php
    include("shared/footer.php");
?>

