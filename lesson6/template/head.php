<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $pagename ?></title>
    <link rel="stylesheet" href="../public/css/<?= $cssname ?>.css">
    <?php
    if ($pagename == 'login'||$pagename == '404'){
        echo  "<link rel=\"stylesheet\" href=\"../public/css/registration.css\">";
    }

    if(!empty($_GET['page'])&&$_GET['page']=='product'){
        echo  "<link rel=\"stylesheet\" href=\"../public/css/chiefslider.css\">";
    }?>

</head>