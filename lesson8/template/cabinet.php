<?php
$user=mysqli_fetch_assoc(execQuery($db,"SELECT * FROM user WHERE idUser={$_SESSION['userId']}"));
?>

<main class="white__back container">
    <div class="registration__header container">
        <span>User cabinet</span>
    </div>

    <form class="form" action="" method="post">

        <input type="text" name="firstname" placeholder="First Name" value="<?= $user['firstname'] ?>">
        <input type="text" name="lastname" placeholder="<?= $user['lastname'] ?>">

        <label class="radio__group" for="pol">
            <input name="pol" class="radio" name="sex" type="radio" id="male" value="male" >

            <label for="male">
                <h4>Male</h4>
            </label>

            <input name="pol" class="radio" name="sex" type="radio" id="female" value="famale">
            <label for="female">
                <h4>Female</h4>
            </label>
        </label>

        <h4>Login details</h4>
        <input type="email" name="email" placeholder="E-mail" value="<?= $user['login'] ?>">
        <input type="password" name="password" placeholder="Password">
        <h5>Please use 8 or more characters, with at least 1 number and a mixture of uppercase and lowercase letters
        </h5>

        <button type="submit" class="button join-now">
            <span>Update your info</span><img src="../public/img/reg_button.png">
        </button>

    </form>

    <section class="loyalty">
        <h1>Your orders</h1>
       <table border="1">
           <tr>
               <td width="100px">Order Num.</td> <td width="200px">Status</td> <td width="400px">Data</td> <td width="200px">Comment</td>
           </tr>
           <?= getMyOrders($db,$_SESSION['userId'])?>
       </table>
    </section>
</main>