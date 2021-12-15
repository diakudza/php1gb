<?php

if(!empty($_GET['action'])){

    switch ($_GET['action']){
        case 'addToCart':
                        execQuery("INSERT INTO cart (`id_good`) VALUES ({$_GET['idForAction']})");
            break;

        case 'removeFromBAsket':

            execQuery("DELETE FROM cart WHERE id={$_GET['idForAction']}") or die('Ошибка удаления товара');
            break;

        case 'clearCart':
            execQuery("DELETE FROM cart") or die('Ошибка очистки корзины');
            break;

        case 'logout':
            unset($_SESSION['user_login']);
            header("Location: index.php?page=login");
            break;
    }
}

if(isset($_POST['reviewform'])){
    insertReview($_SESSION['user_id'], $_POST['good_id'] ,$_POST['reviewtext']);
}