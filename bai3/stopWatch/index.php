<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class StopWatch
    {
        private  $startTime;
        private  $endTime;

        function __construct()
        {
           
        }
        function getStartTime()
        {
            return $this->startTime;
        }
        function getEndTime()
        {
            return $this->endTime;
        }
        function start()
        {
            $this->startTime = hrtime(true);
            
        }
        function stop()
        {
            $this->endTime = hrtime(true);
            // return $this->endTime;
        }
        function getElapsedTime()
        {
            // die($this->startTime);
            return $this->endTime - $this->startTime;
        }
    }


    $thoigian = new StopWatch();


    $thoigian->start();
    for ($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
    }
    $thoigian->stop();

    echo $thoigian->getElapsedTime();


    ?>
</body>

</html>