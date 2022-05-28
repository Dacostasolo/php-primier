    <?php
    $title = "Loops";
    include('includes/header.php') ?>

    <?php
    $first = 34;
    $second = 22;

    $a =  2;
    while ($a <= 10) {
        echo "<p> while loop $a</p>";
        $a++;
    }
    echo '<br/>';

    do {
        echo "<p> do while loop $a</p>";
        $a++;
    } while ($a <= 10);

    function change()
    {
        global $first;
        $GLOBALS['second'] = 2;
        echo $first;
    }


    change();
    echo "<br/>$second";
    ?>
  <?php require("includes/footer.php") ?>