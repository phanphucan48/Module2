<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Application
    {
        private  $name;
        public static $count = 0;
        function __construct($name)
        {
            $this->name = $name;
            self::$count++;
        }
        public function __toString()
        {
            return "Application :" . $this->name;
        }
    }
    echo "total objects count : " . Application::$count . "<br>";
    $App1 = new Application("App one");
    echo "total objects count : " . Application::$count . "<br>";
    $App2 = new Application("App two");
    echo "total objects count : " . Application::$count . "<br>";
    echo $App1;
    echo $App2;

    ?>
</body>

</html>