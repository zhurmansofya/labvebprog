<?php
require("db.php");


$ownpage = $db->query("SELECT * FROM ownpage")->fetchAll(PDO::FETCH_ASSOC);
?>


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
        foreach($page as $ownpage){
        ?>
        <div class="users">
            <div class="name_user"><?php echo $ownpage->name?></div>
            <div class="birthday_user"><?php echo $ownpage->birthday?></div>
            <div class="city_user"><?php echo $ownpage->city?></div>
            <a href="delete.php?id=<?=$ownpage['id']?>">Удалить</a>
        </div>
        <?php
        }
        ?>
    </div>
    <a href="create.php">Добваить нового пользователя</a>
</body>
</html>
