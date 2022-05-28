    <?php
    $title = "If Else If";
    include('includes/header.php') ?>
    <?php
    $grade = 40;
    if ($grade >= 50) {
        echo '<h3 class="passed">you passed with grade ' . $grade . '</h3>';
    } elseif ($grade >= 40) {
        echo "<h3 class='passed'>you passed with grade $grade </h3>";
    } else {
        echo "<h3 class='failed'> you failed </h3>";
    }
    ?>
   <?php require("includes/footer.php") ?>