    <?php
    $title = "For Loop";
    include('includes/header.php') ?>
    <?php
    for ($index = 0; $index < 10; $index++) {
        echo "<p>the count is {$index}</p>";
    }
    ?>
    <?php require("includes/footer.php") ?>