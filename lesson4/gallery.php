<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="scripts/script.js"></script>
    <title>ДЗ4</title>
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
require 'img_resize.php';

$imgFullPath=$_SERVER['DOCUMENT_ROOT']."/lesson4/img";

if(!empty($_FILES)){
    if(move_uploaded_file($_FILES['img']['tmp_name'], "{$imgFullPath}/full/{$_FILES['img']['name']}")){
        img_resize("{$imgFullPath}/full/{$_FILES['img']['name']}", "{$imgFullPath}/small/{$_FILES['img']['name']}", 200, 170);
    }
}


function getImgFromDir($dir){
$arrayOfImages=[];
$listOfFile=scandir("$dir/full");

foreach ($listOfFile as $img){
    if(!is_dir($img)){
        $imgExt=explode('.',$img)[1];
        if($imgExt=='jpg'||$imgExt=='png'||$imgExt=='gif'){
           // echo $img."<br>";
           array_push($arrayOfImages,$img);
        }
    } else {
        continue;
    }
}
return $arrayOfImages;
}


function generateGallery($dir,$col){
    $i=0;
    $gallery="<div class='gallery'>";
    foreach (getImgFromDir($dir) as $img){ 
        
        ++$i;
        $br=(($i % $col) == 0)?'<br>':'';
        $gallery.="<img onclick='openInModal(this)' data-name='$img' class='img' src='img/small/$img' />$br";
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
