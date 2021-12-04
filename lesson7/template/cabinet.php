<?php

if(!empty($_POST)){

    $login = htmlspecialchars($_POST['email']);

    if(mysqli_num_rows(execQuery($db,"SELECT login FROM user WHERE login='$login'")) == 1){
        echo "Такой пользователь уже зарегистрирован<br>";
    }else{
        $password=md5(htmlspecialchars($_POST['password']));
        $firstname=htmlspecialchars($_POST['firstname']);
        $lastname=htmlspecialchars($_POST['lastname']);
        $sex=htmlspecialchars($_POST['pol']);

        execQuery($db,
            "INSERT INTO user (`login`,`pass`,`firstname`,`lastname`,`sex`) 
            VALUES ('$login','$password','$firstname','$lastname','$sex')"
        ) or die(mysqli_error());;
    }

}

$user=mysqli_fetch_assoc(execQuery($db,"SELECT * FROM user WHERE idUser={$_SESSION['user_id']}"));

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
            <span>join now</span><img src="../public/img/reg_button.png">
        </button>

    </form>

    <section class="loyalty">
        <h1>loyalty has its perks</h1>
        <p> Get in on the loyalty program where you can earn points and unlock serious perks. Starting with these
            as soon as you join:</p>
        <ul>
            <li>15% off welcome offer</li>
            <li>Free shipping, returns and exchanges on all orders</li>
            <li>$10 off a purchase on your birthday</li>
            <li>Early access to products</li>
            <li>Exclusive offers & rewards</li>
        </ul>
    </section>
</main>