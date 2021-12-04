<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="scripts/script.js"></script>
    <title>ДЗ5</title>
</head>
<body>
    <div class='modal' id='modal' onclick="modalClose()"></div>
    <div class="formWrap">
        <div onclick="showForm()">Форма загрузки</div>
        <form class="form" id="form" action="" method="post" enctype="multipart/form-data">
            <input type="file" name="img" accept="image/*">
            <button type="submit">Загрузить</button>
        </form>
    </div>
<?php
require_once 'config/config.php';
require 'img_resize.php';

$imgFullPath=ROOT."/img";

if(!empty($_FILES)){
    $fileName= $_FILES['img']['name'];
    $fileServerName= $_FILES['img']['tmp_name'];
    $fileSize=(int) $_FILES['img']['size'];
    if(move_uploaded_file($fileServerName, "{$imgFullPath}/full/{$fileName}")){
        
        mysqli_query($db,"INSERT INTO pic (`name`, `size`,`serverpath`) VALUES ('".$fileName."', '".$fileSize."','".$fileServerName."')") or die('что-то с запросом');
        img_resize("{$imgFullPath}/full/{$_FILES['img']['name']}", "{$imgFullPath}/small/{$_FILES['img']['name']}", 200, 170);

    }
}

function generateGallery($dir,$col){
    $i=0;
    global $db;
    $gallery="<div class='gallery'>";
    $query=mysqli_query($db,'SELECT * FROM pic ORDER BY `counts` DESC') or die('не корректная выборка');
    foreach ($query as $img){ 
         ++$i;
         $br=(($i % $col) == 0)?'<br>':'';
         $gallery.="<a href='fullview.php?id={$img['id']}'><img class='img' src='img/small/{$img['name']}' /></a>$br";
     }
    return $gallery."</div>";
 
}
?>

</div>
<div class="galleryWrap">
<?= generateGallery($imgFullPath,4) ?>  
</div>
</body>
</html>
