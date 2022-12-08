<?php
$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css" />
</head>

<body>
    <div class="container">
        <?php
        foreach($xml->children() as $item){
        ?>
        <div class="users">
            <span class="name_user"><?=$item->name?></span>
            <span class="birthday_user"><?=$item['birthday']?></span>
            <span class="city_user"><?=$item->city?></span>
            <a href="delete.php?id=<?=$item['id']?>">Удалить</a>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>