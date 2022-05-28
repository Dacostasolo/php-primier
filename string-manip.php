    <?php
    $title = "Strings";
    include('includes/header.php') ?>
    <?php
    $string = "hello i am dacosta";
    echo "First Letter to uppercase : " . ucfirst($string) . "<br/>";
    echo "First Letter of each word to uppercase : " . ucwords($string) . "<br/>";
    echo "All to uppercase : " . strtoupper($string) . "<br/>";
    echo "<hr/>";
    echo "searching string characters : " . strchr($string, 'l') . "<br/>";
    echo "<hr/>";
    echo 'finding the length of a string :' . strlen($string) . '<br/>';
    echo 'counting the number of words :' . str_word_count("the world is in chaos and order") . '<br/>';
    echo 'reversing a string : the man is good :' . strrev('the man is good') . '<br/>';
    echo strpos("the man", "a")
    ?>
  <?php require("includes/footer.php") ?>