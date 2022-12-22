<?php
require("db.php");
if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $city = $_POST['city'];


    
    $db->query("INSERT INTO ownpage (Name,Birthday, City) VALUES ('$name', '$birthday', '$city')");

    
    echo "<script>
    alert('книга успешно создана');
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>

   
   <form method="POST" action="#">
         ФИО:<input type="text" name="name" required/><br>
         Дата рождения:<input type="date" name="birthday" required/><br>
         Город:<input type="text" name="city" required/><br>
         <input type="submit" name="submit" value="Save"/>
    </form> 
    <a href="index.php">Назад</a>   
</body>
</html>
