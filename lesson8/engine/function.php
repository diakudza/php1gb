<?php
    function execQuery($db,$query){
        return mysqli_query($db,$query);
    }

    function showSomeMiniCard($db,$count,$isAuth = false) {
        $query=execQuery($db,"SELECT * FROM goods limit $count");
        foreach ($query as $item){
            productCard($db,$item['id'],$isAuth);
        }
    }

    function productCard ($db,$id,$isAuth = false) {
        foreach (execQuery($db,"SELECT * FROM goods WHERE id=$id") as $item): ?>

        <li class="product__card">
            <div class="product__card-imgbox">
                <img class="product__card-img" src="../public/img/<?= $item['photo'] ?>" height="420" alt="cadr_img">
                <?php if($isAuth&&$_SESSION['userLogin']!='admin@gmail.com'): ?>
                <div class="product__card-add">

                        <button type="button" class="productAddBtn" onclick="save(<?= $item['id'] ?>)" id="product<?= $item['id'] ?>">
                           <div class="product__card-btnimg"></div> <span>Add to Cart</span>
                        </button>

                </div>
                <?php endif ?>
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

    function cartSum($db,$userid){
        $totalsum=0;
        foreach (execQuery($db,"SELECT c.count as count,price,c.id
                        FROM cart c
                            LEFT JOIN goods g
                            ON c.id_good = g.id WHERE userid=$userid") as $item){
            $totalsum += $item['price']*$item['count'];
           //
        };
    return $totalsum;
    }

    function cardInCart($db,$idGood,$userid){
        $item=mysqli_fetch_assoc(execQuery($db,"SELECT *,c.id as idCart,c.count as countInCart FROM cart c LEFT JOIN goods g ON c.id_good = g.id WHERE g.id=$idGood AND userid=$userid")); ?>
            <div class="cart__card" id="cardFirst">
                        <img class="cart__card-img" height="188"   src="../public/img/<?= $item['photo'] ?>">
                        <div>
                            <a href="?page=product&id_good=<?= $item['id'] ?>">
                                <h2><?= $item['title'] ?></h2>
                            </a>
                            <p>Price: <span>$<?= $item['price'] ?></span></p>
                            <img class="cart__card-close" id="imgClose<?= $item['id'] ?>" onclick="remove(<?= $item['idCart'] ?>, <?= $item['id'] ?> )" src="../public/img/close.svg">
                            <p>Quantity: <input type="text" value="<?= $item['countInCart'] ?>"></p>
                        </div>
                    </div>
    <?php
    }

    function whichCollection($collect){
        switch ($collect){
            case 1: return "Women collection";
            case 2: return "Men collection";
            case 3: return "Kids collection";
            case 4: return "Accessories";
        }
    }

    function insertReview($db,$userId,$good_id,$text){

        execQuery($db,"INSERT INTO review (user_id, good_id, text) VALUES ('$userId','$good_id','$text')");
    }

    function getSomeReviews($db,$id,$number=1){

        foreach (execQuery($db,"SELECT r.id_review,u.login,g.title,r.text,r.data FROM review r
            LEFT JOIN user u ON r.user_id = u.idUser
            LEFT JOIN goods g ON r.good_id = g.id WHERE r.good_id=$id") as $item): ?>
            <div class="review">
                <div><?= $item['data'] ?></div><div><?= $item['login'] ?></div><div><?= $item['text'] ?></div>
            </div><br>
        <?php endforeach;
    }

    function getMyOrders($db,$userid){
         foreach (execQuery($db,"SELECT * FROM orderlist WHERE userid=$userid")as $row) {?>
            <tr>
                <td><?= $row["idOrder"] ?></td>
                <td><?= $row["status"] ?></td>
                <td><?= $row["date"] ?></td>
                <td><?= $row["comment"] ?></td>
            </tr>
        <?php }
    }
