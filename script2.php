<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php


$x = $_GET['x'];
echo 'Работаем с числом <br /> ' .($_GET["x"]) . '!' ;
$a = 1; 
$b = 1; 



while ($a <= $x) {

if ($a == $x)
{
print " <br /> <b> Задуманное число входит в числовой ряд <b/> ";  break; 
}
    	     
if ($a < $x) {
$x=$a; $a+$b; $b=$x ;
echo ' <br/> Делаем расчет... <br/>';
echo 'Новое значение переменной пользователя = ', $x ;
}
        }

if($a > $x) 
{
     echo "<br /> Задуманное число !НЕ! входит в числовой ряд" ;
}

?>