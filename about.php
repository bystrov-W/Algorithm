<html lang="ru">
    <head>
        <title>Владимир</title>
        <meta charset="utf-8">
        <style>
            div {
                font-family: sans-serif;  
            }
            
              {
             display: table-row;
            }
            
             {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
<?php
$a = 2016 ;
$b = 1990 ;

$userName = 'Владимир Быстров'; 
$userAge = $a - $b; 
$userMail = '<a href= "mailto:wovano@gmail.com">wovano@gmail.com</a>' ;
$userCity = 'Санкт-Петербург' ;
$userInfo = 'начинающий программист' ;

if ($userName)
    { ?> 

<div>     
<h1>Страница пользователя Владимир</h1>

<p><strong>Имя</strong>                      <?=$userName ?><p>
<p><strong>Возраст </strong>                 <?=$userAge ?> <p>
<p><strong>Адрес электронной почты </strong> <?=$userMail ?><p> 
<p><strong>Город</strong>                    <?=$userCity ?> <p>
<p><strong>О Себе:</strong>                  <?=$userInfo?> <p>
</div> 

<?php } 
else { ?>  
<div><h2>Пользователь не найден</h2></div> 

<?php } 
