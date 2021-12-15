<?php
function template($pagename,$cssname) {

    echo '<!DOCTYPE html><html lang="en">';
    require(ROOT.'/template/head.php');
    require(ROOT."/template/header.php");

    switch ($pagename){
        case 'index':
            require(ROOT.'/template/main.php');
            break;
        case 'catalog':
            require(ROOT.'/template/catalog.php');
            break;
        case 'cart':
            require(ROOT.'/template/cart.php');
            break;
        case 'product':
            require(ROOT.'/template/product.php');
            break;
        case 'registration':
            require(ROOT.'/template/registration.php');
            break;
        case 'cabinet':
            require(ROOT.'/template/cabinet.php');
            break;
        case 'login':
            require(ROOT.'/template/login.php');
            break;
        case '404':
            require(ROOT.'/template/404.php');
            break;

    }

    require(ROOT."/template/footer.php");

    echo '<script src="../public/js/menu.js"></script></html>';

}
?>