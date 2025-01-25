<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">

        <?php if (isset($_SESSION['message'])) { ?>

        <?php } ?>
        <div class="box form-box">

            <header>Login</header>
            <span style="color: red;"><?php if (isset($_SESSION['message'])) {
                echo ("Invalid Email and password");
                ?>


                <?php } ?></span>

            <form action="./controller/login.php" method="post">
                <div class="field input">
                    <label for="user_name">User Name</label>
                    <input type="text" name="user_name" id="user_name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>