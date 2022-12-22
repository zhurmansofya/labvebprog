
    <?php
    require("db.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET["id"];
    
        $ownpage = $db->query("SELECT * FROM ownpage WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
        
    
        if (count($ownpage) > 0) {
            $ownpage = $ownpage[0];
        }
    
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $id = $_POST['id'];
    
        $Name = $_POST['name'];
        $Birthday = $_POST['birthday'];
        $City = $_POST['city'];
    
    
        $db->query("UPDATE ownpage SET name='$name', author='$Birthday', photo='$City' WHERE id=$id");
    
    
        echo "<script>
        alert('данные успешно обновлены');
        location.href = 'index.php';
        </script>";
    }
    
    ?>
   
    

   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<form action="" method="POST">
       
        <input type="text" name="name" value="<?php echo $ownpage['Name']?>">
        <br>
        <input type="text" name="birthday" value="<?php echo $ownpage['Birthday']?>">
        <input type="text" name="city" value="<?php echo $ownpage['City']?>">
        <br>
       
        <input type="hidden" name="id" value="<?php echo $ownpage['id']?>">
        <br>
        <button type="submit" name="submit">Сохранить</button>
    </form>


<a href="index.php">Назад</a>
</body>
</html>
