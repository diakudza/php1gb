<?php
session_start();
require 'config/config.php';
require 'engine/function.php';
require 'engine/actions.php';
require 'template/template.php';
if(isset($_SESSION['user_id']))
    $cartCount=mysqli_num_rows(execQuery($db,"SELECT id FROM cart WHERE userid={$_SESSION['user_id']}"));

if(!empty($_GET['page'])){
    switch ($_GET['page']){

        case 'index':
            template($db,'index', 'index');
            break;
        case 'catalog':
            template($db,'catalog', 'catalog');
            break;
        case 'cart':
            template($db,'cart', 'cart');
            break;
        case 'product':
            template($db,'product', 'product');
            break;
        case 'registration':
            template($db,'registration', 'registration');
            break;
        case 'cabinet':
            template($db,'cabinet', 'registration');
            break;
        case 'login':
            template($db,'login', 'login');
            break;
        default:
            template($db,'404', '404');
    }

} else {
    template($db,'index', 'index');
}


