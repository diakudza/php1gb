<?php
    function execQuery($query){
        global $db;
        return mysqli_query($db,$query);
    }

    function showSomeMiniCard($count) {
        $query=execQuery("SELECT * FROM goods limit $count");
        foreach ($query as $item){
            productCard($item['id']);
        }
    }

    function productCard ($id) {
        foreach (execQuery("SELECT * FROM goods WHERE id=$id") as $item): ?>

    <li class="product__card">
        <div class="product__card-imgbox">
            <img class="product__card-img" src="../public/img/<?= $item['photo'] ?>" height="420" alt="cadr_img">
            <div class="product__card-add">

                    <button type="button" class="productAddBtn" onclick="save(<?= $item['id'] ?>)" id="product<?= $item['id'] ?>">
                       <div class="product__card-btnimg"></div> <span>Add to Cart</span>
                    </button>

            </div>
        </div>
        <a href="?page=product&id_good=<?= $item['id'] ?>">
            <h4 class="product__card-header"><?= $item['title'] ?></h4>
            <p class="product__card-text">
                <?= $item['description'] ?>
            </p>
            <h5 class="product__card-price">$<?= $item['price'] ?></h5>
        </a>
    </li>
    <?php endforeach;
    }

    function cartSum(){
        $totalsum=0;
        foreach (execQuery("SELECT c.count as count,price,c.id
                        FROM cart c
                            LEFT JOIN goods g
                            ON c.id_good = g.id") as $item){
            $totalsum += $item['price']*$item['count'];
        };
    return $totalsum;
    }

    function cardInCart($id){
        foreach (execQuery("SELECT *,c.id as idCart FROM cart c LEFT JOIN goods g ON c.id_good = g.id WHERE g.id=$id") as $item): ?>
            <div class="cart__card" id="cardFirst">
                        <img class="cart__card-img" height="188"   src="../public/img/<?= $item['photo'] ?>">
                        <div>
                            <a href="?page=product&id_good=<?= $item['id'] ?>">
                                <h2><?= $item['title'] ?></h2>
                            </a>
                            <img class="cart__card-close" id="imgClose<?= $item['id'] ?>" onclick="remove(<?= $item['idCart'] ?>, <?= $item['id'] ?> )" src="../public/img/close.svg">
                            <p>Price: <span>$<?= $item['price'] ?></span></p>
                            <p>Color: Red</p>
                            <p>Size: Xl</p>
                            <p>Quantity: <input type="text" placeholder="2"> </p>
                        </div>
                    </div>
    <?php endforeach;
    }

    function whichCollection($collect){
        switch ($collect){
            case 1: return "Women collection";
            case 2: return "Men collection";
            case 3: return "Kids collection";
            case 4: return "Accessories";
        }
    }

    function insertReview($user_id,$good_id,$text){

        execQuery("INSERT INTO review (user_id, good_id, text) VALUES ('$user_id','$good_id','$text')");
    }

    function getSomeReviews($id,$number=1){

        foreach (execQuery("SELECT r.id_review,u.login,g.title,r.text,r.data FROM review r
            LEFT JOIN user u ON r.user_id = u.idUser
            LEFT JOIN goods g ON r.good_id = g.id WHERE r.good_id=$id") as $item): ?>
            <div class="review">
                <div><?= $item['login'] ?><div><div><?= $item['data'] ?></div></div><?= $item['text'] ?></div>
            </div><br>
        <?php endforeach;}

