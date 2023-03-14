<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdhWorld Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- MyCSS -->
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="img/AdhWorld-img.png" />
</head>
<body>
    <!-- Login Form -->
    <div class="input-container">
        <!-- Back Beranda -->
        <nav class="navbar navbar-expand-sm shadow-lg" style="background: transparent; border-radius: 15px; top: 30px; width: 370px; left: 40px;">
        <div class="container">
            <a class="navbar-brand" href="home.html">
                <img src="img/AdhWorld-img.png" alt="AdhWorld Logo" width="40" height="40" class="d-inline-block align-text-top">
                <img src="img/AdhWorld-text.png" alt="AdhWorld Text" width="100" height="40" class="d-inline-block align-text-top">
            </a>
          <div class="" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-light" href="home.html">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="registrasi.php">Sign Up/Registrasi</a>
              </li>
            </ul>
            <
          </div>
        </div>
      </nav>
        <!-- Akhir Back Beranda -->
        <form action="" method="post">
            <h1>AdhWorld Login</h1><br>
            <div class="inputbox">
                <input type="text" required="" name="username" id="username" autocomplete="off">
                <span for="username">Username</span>
            </div>
            <br>
            <div class="inputbox">
                <input type="password" required="" name="password" id="password" autocomplete="off">
                <span for="password">Password</span>
            </div>
            <br>
            <button type="submit">Login</button>
            <p class="link signup">Don't have an account?<br>
            <a href="#">Sign up </a> here</a></p>
        </form>
    <!-- Akhir Login Form -->
    </div>
</body>
</html>