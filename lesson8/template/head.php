<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $_GET['page'] ?></title>
    <link rel="stylesheet" href="../public/css/<?= $_GET['page'] ?>.css">
    <?php
    if ($_GET['page'] == 'login'||$_GET['page'] == '404'||$_GET['page'] == 'cabinet'||$_GET['page'] == 'order'){
        echo  "<link rel=\"stylesheet\" href=\"../public/css/registration.css\">";
    }

    if(!empty($_GET['page'])&&$_GET['page']=='product'){
        echo  "<link rel=\"stylesheet\" href=\"../public/css/chiefslider.css\">";
    }?>

</head>