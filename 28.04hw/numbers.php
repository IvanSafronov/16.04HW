<?php
//Задание 1.
$t = 5;
while ($t <= 13)
{
    echo $t . '<br>';
    $t++;

}
echo '<hr>';
//Задание 2.
//цикл while
$num = 1000;
$a = 0;
while ($num > 50)
{
    $num = $num / 2;
    $a++;
}
echo "Получилось число-". $num;
echo '<br>';
echo "Проходов цикла-". $a;
echo '<hr>';
//цикл for
$num0 = 1000;
$b = 0;
for ($num0 = 1000;
     $num0 > 50;
     $b++)

{
    $num0 = $num0 / 2;
}
echo "Получилось число-". $num0;
echo '<br>';
echo "Проходов цикла-". $b;
echo '<hr>';
//Задание 3
$c = 10;
while ($c >= 0)
{
    for ($f = 0;
         $f < $c;
         $f++)
    {
        echo $f. ' , ';
    }
    echo ($f);
    $c--;
    echo '</br>';
}
echo '<hr>';
?>