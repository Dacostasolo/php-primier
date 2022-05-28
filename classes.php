    <?php
    $title = "Classes";
    include('includes/header.php') ?>

    <?php
    class UserAccount
    {
        private $name;
        private $age;
        private $sex;

        public function __construct($name, $age, $sex)
        {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        public  function message()
        {
            echo "<p>my name is $this->name, I am $this->age years old </p> ";
            echo "<br/> i am a $this->sex";
        }
    }

    $person = new UserAccount("solomon", 23, "male");
    $person->message();
    ?>
   <?php require("includes/footer.php") ?>