<?php
session_start();
require 'config/config.php';
require 'engine/function.php';
require 'engine/actions.php';

$pagesArray=[];
foreach (array_slice(scandir('template'),2) as $pageName){
    $tmp=explode(".",$pageName);
    array_push($pagesArray,$tmp[0]);
}

if(!empty($_GET['page'])){

    if(in_array($_GET['page'],$pagesArray)){
        //---header------
        require(ROOT.'/template/head.php');
        require(ROOT."/template/header.php");
        //---main------
        require(ROOT."/template/{$_GET['page']}.php");
    }else{
        require(ROOT."/public/404.php");
    }

} else {
    //---main------
    $_GET['page']='index';
    require(ROOT.'/template/head.php');
    require(ROOT."/template/header.php");
    require(ROOT."/template/index.php");
}
//---footer------
require(ROOT."/template/footer.php");
?>
<script src="../public/js/menu.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
