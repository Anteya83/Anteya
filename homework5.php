<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
    <title>5</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <?php
    $phonebook = json_decode(file_get_contents('phonebook.json'));
    foreach ($phonebook as $contacts) {
         echo '<tr>';
         echo '<td>' . $contacts->firstName . '</td>';
         echo '<td>' . $contacts->lastName . '</td>';
         echo '<td>' . $contacts->address . '</td>';
         echo '<td>' . $contacts->phoneNumber . '</td>';
         echo '</tr>';
    }
    ?>
</table>
</body>
</html>