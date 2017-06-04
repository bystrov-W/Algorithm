<?php 
$userName = 'Иван Петров'; 
$userAge = 'superivan'; 
if ($userName)
	{ ?> 
<div>     
<h2>Информация о пользователе</h2>     
<p>Имя <strong><?= $userName ?></p>     
<p>Возраст <strong><?= $userAge ?></p> 
</div> 

<?php } 
else { ?>  
<div><h2>Пользователь не найден</h2></div> 
<?php } 