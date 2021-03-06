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
                <a href="?page=catalog">
                    <div class="offer__card off__women">
                        <div class="offer__card-text">
                            <p>30% off</p>
                            <h4>for women</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="?page=catalog">
                    <div class="offer__card off__man">
                        <div class="offer__card-text">
                            <p> hot deal</p>
                            <h4>for men</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="?page=catalog">
                    <div class="offer__card off__kids">
                        <div class="offer__card-text">
                            <p>new arrivals</p>
                            <h4>for kids</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="?page=catalog">
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
            <?= showSomeMiniCard(6) ?>
        </ul>
        <div class="product__bottom-wrap">
            <a class="product__button container" href="?page=catalog">
                Browse All Product
            </a>
        </div>
    </section>
</main>