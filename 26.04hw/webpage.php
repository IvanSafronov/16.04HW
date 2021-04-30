<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/stylepage.css">
    <title>hw_26.04</title>
</head>
    <body>
        <?php
            $name = "Иван";
                echo "<h1>Меня зовут $name</h1>";
            $age = "32";
                echo "<h2>Мне $age года</h2>";
            define("Pi", "3,1415926535");
            $time=date( "h:i" );
                echo "<h3>Сейчас: $time </h3>";
            $day="день";
            $night="ночь";
        ?>
        <div><h2>Константа пи- <?echo Pi;?></h2> </div>
        <?if
            ($time>="08:00" && $time<"20:00") {
                echo $day;
                echo "<img src='day.jpeg.'>";
        }
            else {
                echo $night;
                echo "<img src='night.jpeg'>";
        }
        ?>
    </body>
</html>