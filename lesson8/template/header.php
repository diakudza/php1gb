<?php

$cartCount=!empty($_SESSION)?mysqli_num_rows(execQuery($db,"SELECT id FROM cart WHERE userid={$_SESSION['userId']}")):0;

?>
<header>
    <div class="nav container">
        <div class="nav__panel margin container">

            <ul class="nav__logo">
                <li><a href="/" title="Main"></a></li>
                <li><button type="button" class="nav__logo-find" title="Find"></button></li>
            </ul>
            <p><a href="index.php?action=logout"><?php echo !empty($_SESSION['userLogin'])?$_SESSION['userLogin']:'guest'; ?> </a></p>
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
                    <a href="?page=<?php
                    if(isset($_SESSION['userLogin'])&&($_SESSION['role']!='admin')){
                        echo "cabinet";
                    } elseif (isset($_SESSION['userLogin'])&&($_SESSION['role']=='admin')){
                        echo "order";
                    } else {
                        echo "registration";
                      } ?>">
                    </a>
                </li>
                <?php if(isset($_SESSION['userLogin'])): ?>
                <li>
                    <a href="?page=cart" title="Cart"></a>
                    <i class="count" id="count"><?= $cartCount ?></i>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>