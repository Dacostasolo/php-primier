    <?php
    $title = "Arrays";
    include('includes/header.php') ?>
    <?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    for ($i = 0; $i < count($numbers); $i++) {
        # code...
        echo "<p>the number at index $i: $numbers[$i]";
    }
    ?>
   <?php require("includes/footer.php") ?>