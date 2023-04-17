<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/reset.css">
  <script src="https://kit.fontawesome.com/3075f3c068.js" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>
  <div class="container">

    <div class="form-box">
      <h2>Login</h2>

      <form action="validation.php" method="post">
        <div class="form-group">
          <i class="fa-solid fa-user"></i>
          <label style="font-family:Complex;" for="username">Username</label>
          <input type="text" name="user" id="username" class="form-control" required>
        </div>

        <div class="form-group">
          <i class="fa-solid fa-lock"></i>
          <label style="font-family:Complex;" for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <p>Lost password <a href="#">Click Here!</a></p>
        <div class="btn-field">
          <button type="submit">Sign in</button>
          <button type="submit" class="disable" id="signinBtn"><a href="register.php" style="color:#555;">Sign up</a></button>
        </div>
      </form>
    </div>
    <a href="index.php"><img src="/img/logo.png" class="logo" alt=""></a>
  </div>
</body>

</html>