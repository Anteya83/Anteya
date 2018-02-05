<body>
<?php
$animals = [
    'Africa'=> ['Elefant grey', 'Tiger', 'Wild Horse', 'Monkey', 'King Crocodile'],
    'Asia'=> ['Lion', 'Green frog', 'Bison'],
    'Europe'=> ['Wolf', 'Bear', 'Mouse', 'White lama', 'Antilopa gnu'],
];
$twoWord=[];
$arrayAnimal=[];

foreach ($animals as $countries => $animal_mas){ 
    foreach ($animal_mas as $value) {  
               if (!stripos($value, " ") == false)//Проверяем строку на наличие пробела
        {
            $twoWord[] = $value;
        }
    }
}

       
$first_word = [];
$second_word = [];
foreach ($twoWord as $value) {
    $first_word[] = stristr($value, ' ', true);  
    $second_word[] = stristr($value, ' '); }
shuffle($first_word); 
shuffle($second_word);
$fantastic_animals = [];
$count = 0;
foreach ($first_word as $first) {
    $fantastic_animals[] = $first . $second_word[$count]; 
    $count++;
}?>

<?php 

            foreach ($fantastic_animals as $value) {
                echo "$value<br>"; }//все жив 
foreach ($animals as $countries => $real_animals) { // первый массив жив

 echo "<h1>$countries</h1>";
    foreach ($real_animals as $real_animals_value) { 
        foreach ($fantastic_animals as $fantastic_animals_value) { 
            if (stristr($real_animals_value, " ", true) == stristr($fantastic_animals_value, " ", true)) 
            {
                echo $fantastic_animals_value . " ";
            }
        }
            }
}?>

</body>
</html>