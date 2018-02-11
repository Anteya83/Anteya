<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>
<?php
$animals = [
   'Africa'=> ['Hyena', 'Lion', 'White rhino', 'Eared Fox', 'Zebra'],
   'Asia'=> ['Red wolf','Bactrian camel', 'Tiger'],
   'Europe'=> ['Red Fox', 'Squirrel', 'White lama', 'Seal'],
];

$animalArray=[];

foreach ($animals as $countries => $animal_mas){ 
    foreach ($animal_mas as $value => $animal) {  
              $animalArray=explode(" ", $animal);
    if (count($animalArray) == 2) {
            $animal2[$countries][$value] = $animalArray;
        }

    }
}


$second_word = [];
foreach ($animal2 as $countries) {
    foreach ($countries as $animal) {
        $second_word[] = $animal[1];
    }
}


shuffle($second_word);



$fantastic_animals = [];
$count = 0;

foreach ($fantastic_animals as $value) {
                echo "$value<br>"; }//  

foreach ($animal2 as $countries => $fantastic_animals) {
echo "<h2>" . $countries . "</h2>";
foreach ($fantastic_animals as &$animalArray) {
        $animalArray[1] = $second_word[$count];
        $count++;
        $animalArray = implode(" ", $animalArray);
    }
    $fantastic_animals = implode(", ", $fantastic_animals);
    echo $fantastic_animals;

     
}?>

</body>
</html>