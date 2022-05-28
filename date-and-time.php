    <?php
    $title = "Dates and Time";
    include('includes/header.php') ?>
    <?php
    #using the getdate function
    $dateNow = getdate();
    echo 'day : ' . $dateNow['mday'] . '<br/>';
    echo 'month : ' . $dateNow['mon'] . '<br/>';
    echo 'year : ' . $dateNow['year'] . '<br/>';
    #l = day of the week
    #y = years
    #m = months
    #d = day of the month
    echo "the date function : " . date("l,d m,y");

    echo "<hr/>";
    echo "<h1> time statements using the date function</h1>";
    # where h = hours
    #i = minutes
    #s = seconds
    #a = Ante meridian or post meridian (am and pm)

    echo "the time is :" . date("h:i:sa");

    echo "<hr/>";
    echo "<h1> time statements using the time function</h1>";
    echo time();

    echo "<hr/>";
    echo "<h1> string to time function</h1>";
    $now = strtotime("15 May 2020 11:44am");
    echo "the date is :" . date("y-m-d , h:ia", $now);

    echo "<hr/>";
    echo "<h1> make time function</h1>";
    #it take values hours ,minutes,seconds,day,month,year
    $time = mktime(10, 15, 45, 2, 5, 2020);
    echo "the date is :" . date("y-m-d , h:ia", $time);



    ?>
<?php require("includes/footer.php") ?>