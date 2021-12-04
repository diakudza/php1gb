<?php
if(!empty($_POST)){
    $login = htmlspecialchars($_POST['login']);
    $password = $_POST['password'];
    $result=mysqli_fetch_array(execQuery($db,"SELECT * FROM user WHERE login='$login'"));

    if($login === $result['login'] && $result['pass'] === md5($password)){
            session_start();
            $_SESSION['user_login'] = $result['login'];
            $_SESSION['user_id'] = $result['idUser'];
            header("Location: index.php?page=cabinet");
            }else{
        echo "Нет такой пары ";
    }

    }
unset($_POST);
?>

<main class="white__back container">
        <div class="registration__header container">
            <span>LOGIN</span>
        </div>

        <form class="form" action="" method="post">

            <input type="text" name="login" placeholder="login">
            <input type="password" name="password" placeholder="password">
                <br>
            <button type="submit" class="button join-now">
                <span>join now</span><img src="../public/img/reg_button.png">
            </button>

        </form>


</main>