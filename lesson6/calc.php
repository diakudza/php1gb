<?php
if(!empty($_GET['left'])&&!empty($_GET['left'])) {
    $a=$_GET['left'];
    $b=$_GET['right'];
    switch ($_GET['oper']) {
        case "sum":
            $result = ( $a + $b );
            break;

        case "sub":
            $result = ( $a - $b );
            break;
        case "mult":
            $result = ( $a * $b );
            break;

        case "dif":
            $result = ( $b != 0 )?( round($a / $b,2 )):'Делить на 0 - нельзя!';
            break;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            input{
                width: 30px;
            }
    </style>
</head>

<body>
<form action="" method="get">
    <input type="text" name="left" value="<?= isset($a)?$a:1 ?>"/>
    <select name="oper">
        <option value="sum">+</option>
        <option value="sub">-</option>
        <option value="mult">*</option>
        <option value="dif">/</option>
    </select>
    <input type="text" name="right" value="<?= isset($b)?$b:1 ?>"/>
    <?= isset($result)?'='.$result:'' ?><br><br>
    <button type="submit">Вычислить</button>
</form>
</body>
</html>
