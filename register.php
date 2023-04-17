<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reset.css">
    <script src="https://kit.fontawesome.com/3075f3c068.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>

<body>
    <div class="container">

        <div class="form-box">
            <h2>Register</h2>

            <form action="registration.php" method="post">
                <div class="form-group">
                    <i class="fa-solid fa-user"></i>
                    <label style="font-family:Complex;" for="new-username">Username</label>
                    <input type="text" name="user" id="new-username" class="form-control" required>
                </div>

                <div class="form-group">
                    <i class="fa-solid fa-envelope"></i>
                    <label style="font-family:Complex;" for="new-email">Email</label>
                    <input type="text" name="email" id="new-email" class="form-control" required>
                </div>

                <div class="form-group">
                    <i class="fa-solid fa-lock"></i>
                    <label style="font-family:Complex;" for="new-password">Password</label>
                    <input type="password" name="password" id="new-password" class="form-control" required>
                </div>
                <div class="btn-field">
                    <button type="submit" class="disable"><a href="login.php" style="color:#555">Sign in</a></button>
                    <button type="submit">Sign up</button>
                </div>
            </form>
        </div>
        <a href="index.php"><img src="/img/logo.png" class="logo" alt=""></a>
    </div>
</body>

</html>