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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $city = $_POST['city'];

        $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
        
        $task = $xml->addChild('item', '');
        $task->addAttribute('birhday', $birthday);
        $task->addChild('name', $name);
        $task->addChild('city', $city);
        $task->addAttribute('id', $xml->count());

        $xml->saveXML('data.xml');
    }
    ?>
   
   <form method="POST" action="create.php">
         ФИО:<input type="text" name="name" required/><br/>
         Дата рождения:<input type="date" name="birthday"/><br/>
         Город:<input type="text" name="city" required/><br/>
         <input type="submit" value="Save"/>
    </form>    
</body>
</html>
