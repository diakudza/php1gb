<!DOCTYPE html>
<html lang="en">
<?php
	require($_SERVER['DOCUMENT_ROOT'].'/template/head.php'); 
?>
@@include('_head.html',{"title":"Catalog" , "path" : "./css/catalog.css" })
<body>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');  ?>
    <main class="white__back container">
        <section class="catalog__header container">
            <span class="catalog__header--arrivals">NEW ARRIVALS</span>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.php"> home </a>/</li>
                    <li><a href="#">men </a>/</li>
                    <li><a href="#">new arrivals</a></li>
                </ul>
            </nav>
        </section>
        <section class="catalog__menu width  container margin">
            <div class="catalog__filter">

                <button class="./img_filtr" onclick="ctlMenuClose()">
                    <span>filter</span><img src="./img/filter_i.svg">
                </button>

                <div class="catalog__filter-menu" id="ctlMenu" >
                    
                        <img src="./img/filter_i.svg" onclick="ctlMenuClose()">
                    
                    <ul>
                        <li>
                            <div class="catalog__filter-block catalog__filter-bcat">category</div>
                            <ul class="catalog__filter-category">
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Denim</a></li>
                                <li><a href="#">Hoodies & Sweatshirts</a></li>
                                <li><a href="#">Jackets & Coats</a></li>
                                <li><a href="#">Polos</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Sweaters & Knits</a></li>
                                <li><a href="#">T-Shirts</a>
                                <li><a href="#">Tanks</a>    
                            </ul>
                        </li>
                        
                        <li><div class="catalog__filter-block">brand</div>
                            <ul class="catalog__filter-brand">
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Versace</a></li>
                                <li><a href="#">Burberry</a></li>
                                <li><a href="#">Louis Vuitton</a></li>
                                <li><a href="#">Prada</a></li>
                                <li><a href="#">Dolce & Gabbana</a></li>
                                <li><a href="#">Chanel</a></li>
                                <li><a href="#">Giorgio Armani</a></li>
                            </ul>
                        </li>
                        <li><div class="catalog__filter-block">desinder</div>
                            <ul class="catalog__filter-desinder">
                                <li><a href="#">Betsey Johnson</a></li>
                                <li><a href="#">Tom Ford</a></li>
                                <li><a href="#">Donatella Versace</a></li>
                                <li><a href="#">Ralph Lauren</a></li>
                                <li><a href="#">Marc Jacobs</a></li>
                                <li><a href="#">Valentino</a></li>
                                <li><a href="#">Dolce & Gabbana</a></li>
                                <li><a href="#">Lee Alexander McQueen</a></li>
                                <li><a href="#">John Galliano</a></li>
                                <li><a href="#">Stella Nina McCartney</a>
                                  
                            </ul>
                        </li>
                        </ul>
                </div>
            </div>

            <div class="catalog__menu--size">
                <div class="catalog__menu--it">trending now<img class="catalog__menu--it" src="./img/down.svg">
                </div>
                <div class="catalog__menu--it">size
                    <ul class="size__menu">
                        <li><input type="checkbox">xs</li>
                        <li><input type="checkbox">s</li>
                        <li><input type="checkbox">m</li>
                        <li><input type="checkbox">l</li>
                    </ul>
                    <img class="catalog__menu--it" src="./img/down.svg">
                </div>

                <div class="catalog__menu--it">price <img class="catalog__menu--it" src="./img/down.svg"></div>
            </div>
        </section>
        <section class="product__table width container">
            <h2 class="visually-hidden">product-catalog</h2>
            <ul class="product__list">

                    @@include('_product-cart.html', {"pathimg" : "./img/product-card1.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card12.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card3.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card4.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card7.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card8.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card9.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card10.png" })
                    @@include('_product-cart.html', {"pathimg" : "./img/product-card11.png" })
            </ul>
        </section>

        <div class="paginator">
            <div><a href="#"><img src="./img/left.svg"></a></div>
            <ul class="paginator__list">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li>.....</li>
                <li>20</li>
            </ul>
            <div><a href="#"><img src="./img/right.svg"></a></div>
        </div>

        
    </main>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');  ?>

    <script src="./js/menu.js"></script>
</body>

</html>