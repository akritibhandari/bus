<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="./controller/register.php" method="post" onsubmit=" return passCheck()">
                <div class=" field input">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" id="full_name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">User Name</label>
                    <input type="text" name="user_name" id="user_name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="phone_no">Phone no</label>
                    <input type="tel" name="phone_no" id="phone_no" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="Password" autocomplete="off" required>
                </div>
                <span id="message" style="color: red;"></span>
                <div class="field input">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="Re-Password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" autocomplete="off" required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function passCheck() {
            let password = document.getElementById("Password").value;
            let confirmPassword = document.getElementById("Re-Password").value;

            if (password != confirmPassword) {
                document.getElementById("message").innerHTML = "Passwords do not match!";
                return false;
            } else if (password == confirmPassword) {
                document.getElementById("message").innerHTML = "";
                return true;
            }
        }

    </script>
</body>

</html>