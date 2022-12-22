<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>
<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $city = $_POST['city'];

        $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

        $lastEl=$xml->item[($xml->count())-1];
        
        $new = $xml->addChild('item', '');
        $new->addChild('birthday', $birthday);
        $new->addChild('name', $name);
        $new->addChild('city', $city);
        $new->addAttribute('id', $lastEl['id']+1);
        
        $xml->saveXML('data.xml');
        
    }
    ?>
   
   <form method="POST" action="#">
         ФИО:<input type="text" name="name" required/><br>
         Дата рождения:<input type="date" name="birthday" required/><br>
         Город:<input type="text" name="city" required/><br>
         <input type="submit" name="submit" value="Save"/>
    </form> 
    <a href="index.php">Назад</a>   
</body>
</html>
