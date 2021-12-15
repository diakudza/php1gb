
<main class="white__back container">

        <div class="cart__header container">
            <span>shopping cart</span>
        </div>

        <div class="card__column" id="cardColumn">
        <?php
//                echo mysqli_num_rows(execQuery($db,"SELECT id_good,id,count FROM cart WHERE userid={$_SESSION['user_id']}"));
                foreach ( execQuery($db,"SELECT id_good,id,count FROM cart WHERE userid={$_SESSION['user_id']}") as $item){

                   cardInCart($db,$item['id_good'],$_SESSION['user_id']);
            }
        ?>
            <div class="card__column-btnblock">
                <a type="button" class="product__button" id="clearCartBtn" href="index.php?idForAction=a&action=clearCart">clear shopping cart</a>
                <a class="product__button" href="index.php?page=catalog">continue shopping</a>
            </div>
        </div>

        <form class="form">
            <div class="form__text">
                <h3>SHIPPING ADRESS</h3>
                <input type="text" placeholder="Bangladesh">
                <input type="text" placeholder="State">
                <input type="number" placeholder="Postcode / Zip">
                <button type="button" class="product__button form__get">get a quote</button>
            </div>
            <div class="form__checkout">
                <h3>sub total <span>$<?= cartSum($db,$_SESSION['user_id']) ?></span></h3>
                <h4>grand total <span>$<?= cartSum($db,$_SESSION['user_id']) ?></span></h4>
                <div class="form__checkout-line"></div>
                <button type="submit" class="product__button button__proceed" type="submit">proceed to checkout</button>
            </div>
        </form>
</main>