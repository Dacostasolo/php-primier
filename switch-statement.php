    <?php
    $title = "Switch Statements";
    include('includes/header.php') ?>
    <?php
    $grade = "A";
    $results = "";
    switch ($grade) {
        case 'A':
            $results = "<h3 class ='passed'> you did very excellent </h3>";
            break;
        case 'B':
            $results = "<h3 class ='well'> you did very well </h3>";
            break;
        default:
            $results = "<h3 class ='failed'> you did very excellent </h3>";
            break;
    }
    echo $results;
    ?>
    <?php require("includes/footer.php") ?>