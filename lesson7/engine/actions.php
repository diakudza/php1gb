<?php

if(!empty($_GET['action'])){

    switch ($_GET['action']){
        case 'addToCart':
            if(mysqli_num_rows(execQuery($db,"SELECT * FROM cart WHERE id_good={$_GET['idForAction']} AND userid={$_SESSION['user_id']}"))==0){
                echo "INSERT";
                execQuery($db,"INSERT INTO cart (`id_good`,`userid`) VALUES ({$_GET['idForAction']},{$_SESSION['user_id']})");
            }else{
                echo "UPDATE";
                execQuery($db,"UPDATE cart SET count=count+1 WHERE id_good={$_GET['idForAction']} AND userid={$_SESSION['user_id']}");
            }


            break;

        case 'removeFromBAsket':
            execQuery($db,"DELETE FROM cart WHERE id={$_GET['idForAction']}") or die('Ошибка удаления товара');
            break;

        case 'clearCart':
            execQuery($db,"DELETE FROM cart") or die('Ошибка очистки корзины');
            break;

        case 'logout':
            $_SESSION=[];
            header("Location: index.php?page=login");
            break;
    }
}

if(isset($_POST['reviewform'])){
    insertReview($db,$_SESSION['user_id'], $_POST['good_id'] ,$_POST['reviewtext']);
}