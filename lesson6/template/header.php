<?php global $cartCount ?>
<header>
    <div class="nav container">
        <div class="nav__panel margin container">

            <ul class="nav__logo">
                <li><a href="/" title="Main"></a></li>
                <li><button type="button" class="nav__logo-find" title="Find"></button></li>
            </ul>
            <p><a href="index.php?action=logout"><?php echo !empty($_SESSION['user_login'])?$_SESSION['user_login']:'guest'; ?> </a></p>
            <ul class="menu__btn--group">
                <li>
                    <button type="button" class="menu__btn--button" id="menu_btn" onclick="menuVerticalShow()" title="Menu"></button>
                    <NAV class="menu__vertical" id="menu__vertical">

                        <div class="menu__vertical-block">
                            <div class="menu__vertical-back"></div>
                            <ul class="menu__vertical-list">
                                <div class="menu-close" id="menu-close" onclick="menuVerticalShow()"></div>
                                <span>menu</span>
                                <li><span>man</span>
                                    <ul>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Denim</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                </li>
                                <li><span>woman</span>
                                    <ul>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Jackets & Coats</a></li>
                                        <li><a href="#">Polos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Shirts</a></li>
                                    </ul>
                                </li>
                                <li><span>kids</span>
                                    <ul>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Jackets & Coats</a></li>
                                        <li><a href="#">Polos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Bags</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </NAV>
                </li>
                <li>
                    <a href="?page=<?= isset($_SESSION['user_login'])?'cabinet':'registration'; ?>" title="Registation"></a>
                </li>
                <li>
                    <a href="?page=cart" title="Cart"></a>
                    <i class="count" id="count"><?= $cartCount ?></i>
                </li>
            </ul>
        </div>
    </div>
</header>