
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
$twoWord=[];
$arrayAnimal=[];
$counter = 0;
foreach ($animals as $key => $continents){ 
    foreach ($continents as $animal) {  
        $arrayAnimal[$counter] = explode(' ', $animal);
       $counter++;
    }}
foreach($arrayAnimal as $double) { 
    $c = count($double); 
    if ($c == 2) {
        $twoWord[] = $double; 
    }
}
$imploded_animals = [];
foreach ($twoWord as $value) {
    $imploded_animals[] = implode(' ', $value); 
}
$first_word = [];
$second_word = [];
foreach ($imploded_animals as $value) {
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
                echo "$value<br>"; } 
foreach ($animals as $countries => $real_animals) { //зашли в самый первый массив животных

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