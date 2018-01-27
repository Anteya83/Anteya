<?php 
	  $nameis= "Татьяна" ;
      $myage= 34;
      $myemail="L1111@ya.ru";
      $mycity="Екатеринбург";
      $about="программист в будущем";
	 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>PHP1</title>
</head>
<body>

	<h1>Страница пользователя <?php  echo $nameis ?></h1>

	<p>ИМЯ: &nbsp<?php  echo $nameis ?></p>

	<p>Возраст: &nbsp<?php  echo $myage ?></p>

	<p>Адрес электронной почты: &nbsp   <?php  echo $myemail ?></p>

	<p>Город: &nbsp <?php  echo $mycity ?></p>

	<p>О себе: &nbsp <?php  echo $about ?></p>


</body>

</html>