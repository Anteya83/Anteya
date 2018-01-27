<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework2 </title>
</head>
<body>
	<h1>Проверка :является ли число-числом Фибоначчи</h1>
	<?php

	      $x=rand(0,100);
          $a1=1;
          $a2=1;

	  do{
        if ($a1<$x and $a1!=$x)
       
	  	{$a3=$a1;
	  	$a1=$a1+$a2;
	  	$a2=$a3;}
          
       elseif ($a1 > $x) {echo "$x не входит в числовой ряд";break;}
       else {echo "$x входит в числовой ряд";break;};


} while ($x <=100); 
	   ?>
	
</body>
</html>
