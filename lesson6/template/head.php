<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $cssname ?></title>
    <link rel="stylesheet" href="../public/css/<?= $cssname ?>.css">
    <?php
    if ($cssname == 'login'||$cssname == '404'){
        echo  "<link rel=\"stylesheet\" href=\"../public/css/registration.css\">";
    }

    if(!empty($_GET['page'])&&$_GET['page']=='product'){
        echo  "<link rel=\"stylesheet\" href=\"../public/css/chiefslider.css\">";
    }?>

</head>