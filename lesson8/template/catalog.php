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
                    <span>filter</span><img src="../public/img/filter_i.svg">
                </button>

                <div class="catalog__filter-menu" id="ctlMenu" >

                        <img src="../public/img/filter_i.svg" onclick="ctlMenuClose()">

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
                <div class="catalog__menu--it">trending now<img class="catalog__menu--it" src="../public/img//down.svg">
                </div>
                <div class="catalog__menu--it">size
                    <ul class="size__menu">
                        <li><input type="checkbox">xs</li>
                        <li><input type="checkbox">s</li>
                        <li><input type="checkbox">m</li>
                        <li><input type="checkbox">l</li>
                    </ul>
                    <img class="catalog__menu--it" src="../public/img/down.svg">
                </div>

                <div class="catalog__menu--it">price <img class="catalog__menu--it" src="../public/img/down.svg"></div>
            </div>
        </section>
        <section class="product__table width container">
            <h2 class="visually-hidden">product-catalog</h2>
            <ul class="product__list">
                <?= showSomeMiniCard($db,12, isset($_SESSION['userId'])) ?>
            </ul>
        </section>
        <div class="paginator">
            <div><a href="#"><img src="../public/img/left.svg"></a></div>
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
            <div><a href="#"><img src="../public/img/right.svg"></a></div>
        </div>
</main>