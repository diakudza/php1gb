<main class="white__back container">
        <div class="registration__header container">
            <span>registration or <a href="?page=login">login</a></span>
        </div>

        <form class="form" action="" method="post">
            <h4>Your Name</h4>
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>

            <label class="radio__group" for="pol">orderlist
                <input name="pol" class="radio" name="sex" type="radio" id="male" value="male" required>

                <label for="male">
                    <h4>Male</h4>
                </label>

                <input name="pol" class="radio" name="sex" type="radio" id="female" value="famale" required>
                <label for="female">
                    <h4>Female</h4>
                </label>
            </label>

            <h4>Login details</h4>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Password" required>
            <h5>Please use 8 or more characters, with at least 1 number and a mixture of uppercase and lowercase letters
            </h5>

            <button type="submit" class="button join-now" name="registration">
                <span>Registration</span><img src="../public/img/reg_button.png">
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