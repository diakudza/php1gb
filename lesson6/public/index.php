<!DOCTYPE html>
<html lang="en">
<?php
	require($_SERVER['DOCUMENT_ROOT'].'/template/head.php'); 
?>
<body>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');  ?>
    <main class="white__back container">
        <section class="title">
            <h2 class="visually-hidden">Main img</h2>
            <div class="main__img"></div>
            <div class="tagline">
                <div class="tagline__redline"></div>
                <div class="tagline__text">
                    <span class="tagline__text-head">the brand
                        <h4>of luxerious <span>fashion</span></h4>
                    </span>

                </div>
            </div>
        </section>
        <section class="offer  width  margin">
            <h2 class="visually-hidden">Offers</h2>
            <ul class="offer__list">
                <li>
                    <a href="catalog.php">
                        <div class="offer__card off__women">
                            <div class="offer__card-text">
                                <p>30% off</p>
                                <h4>for women</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="catalog.php">
                        <div class="offer__card off__man">
                            <div class="offer__card-text">
                                <p> hot deal</p>
                                <h4>for men</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="catalog.php">
                        <div class="offer__card off__kids">
                            <div class="offer__card-text">
                                <p>new arrivals</p>
                                <h4>for kids</h4>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="catalog.php">
                        <div class="offer__card-accessories">
                            <div class="offer__card-text">
                                <p>luxerious & trendy</p>
                                <h4>accessories</h4>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
        <section class="product width   margin">
            <h2 class="visually-hidden">product</h2>
            <header class="product__header">
                <h3 class="product__header">Fetured Items</h3>
                <p class="product__header-text">Shop for items based on what we featured in this week</p>
            </header>
            <ul class="product__list">

                @@include('_product-cart.html', {"pathimg" : "./img/product-card1.png" })
                @@include('_product-cart.html', {"pathimg" : "./img/product-card2.png" })
                @@include('_product-cart.html', {"pathimg" : "./img/product-card3.png" })
                @@include('_product-cart.html', {"pathimg" : "./img/product-card4.png" })
                @@include('_product-cart.html', {"pathimg" : "./img/product-card5.png" })
                @@include('_product-cart.html', {"pathimg" : "./img/product-card6.png" })
            </ul>
            <div class="product__bottom-wrap">
                <button type="button" class="product__button container">
                    Browse All Product
                </button>
            </div>
        </section>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/template/advantages.php');  ?>
    </main>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');  ?>
    <script src="./js/menu.js"></script>
    
</html>