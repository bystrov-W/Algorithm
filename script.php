<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php


$x = $_GET['x'];
echo 'Число введенное пользователем : <br /> ' .($_GET["x"]) . '!' ;
$a = 1; 
$b = 1; 




while ($a <= $x) {

if ($a == $x)
{
print " <br /> <b> Задуманное число входит в числовой ряд <b/> "; break ;
}
    	     
elseif ($a < $x) 
{
$c=$a; $a=$a+$b; $b=$c ;

echo '<br/>Переменная A присвоено значение = ', $a ;
echo '<br/>Переменная B присвоено значение  = ', $b ;
echo '<br/> <strong>Переменная C присвоено значение  = </strong> 	', $c ;
}
        }


if ($a > $x) 
{
     echo "<br /> Задуманное число НЕ входит в числовой ряд" ;
}

?>