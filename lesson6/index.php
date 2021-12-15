<?php
session_start();
require 'config/config.php';
require 'engine/function.php';
require 'engine/actions.php';
require 'template/template.php';

$cartCount=mysqli_num_rows(execQuery("SELECT id FROM cart"));
if(!empty($_GET['page'])){
    switch ($_GET['page']){

        case 'index':
            template('index', 'index');
            break;
        case 'catalog':
            template('catalog', 'catalog');
            break;
        case 'cart':
            template('cart', 'cart');
            break;
        case 'product':
            template('product', 'product');
            break;
        case 'registration':
            template('registration', 'registration');
            break;
        case 'cabinet':
            template('cabinet', 'registration');
            break;
        case 'login':
            template('login', 'login');
            break;
        default:
            template('404', '404');
    }

} else {
    template('index', 'index');
}


