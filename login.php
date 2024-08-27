<?php
  // Includ bootstrap
  include_once(__DIR__ . '/bootstrap.php');

  // Check if user is already logged in
  session_start();

  if (isset($_SESSION['loggedin'])) {
    header('Location: ./dashboard/index.php');
    exit;
  }

  if (!empty($_POST)) {
    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);

    if ($user->login()) {
      $_SESSION['loggedin'] = true;
      header('Location: ./dashboard/index.php');
      exit;
    } else {
      $error = true;
    }
  }
?><!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Reset CSS -->
  <link rel="stylesheet" href="./assets/css/reset.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/bootstrap/icons/font/bootstrap-icons.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">
  <!-- Tab title -->
  <title>Aanmelden | eduBridge Belgium</title>
</head>
<body>
  <!-- Start header content -->
  <!-- Start header content -->
  <header class="mb-4">
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container">
        <!-- Language switcher container -->
        <div id="top-navbar" class="d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mb-4 mt-2">
          <ul class="language-switcher d-flex gap-2 p-0 mb-0">
            <li><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#" class="active-lang">NL</a></li>
            <li><a href="#">DE</a></li>
          </ul>
          <p id="belgium-link" class="fs-6">
            Officiële informatie en diensten: <a href="https://www.belgium.be" target="_blank">www.belgium.be</a>
          </p>
        </div>

        <!-- Navigation container -->
        <div id="navigation-container" class="d-flex w-100 justify-content-between align-items-center">
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
          <a href="index.php" class="navbar-brand-small"><img class="me-2" src="./assets/images/logo/logo-b.png" alt="eduBridge logo"></a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="d-flex flex-column gap-5 mb-5 pb-5">

    <!-- Intro section -->
     <section id="login-intro" class="container d-flex justify-content-between align-items-center mt-5 mb-5">
      <div>
        <div>
          <h2>Welkom terug</h2>
          <span class="tag-line theme-blue"></span>
          <p class="mt-4">
            Vul de inputvelden in of meld je aan met een van de onderstaande methoden.
          </p>
        </div>
        <form action="login.php" method="post" class="mt-4">
          <div class="mb-4 input-group-lg">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="zvDyG@example.com">
          </div>
          <div class="mb-4 input-group-lg">
            <label for="exampleInputPassword1" class="form-label">Wachtwoord</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="********">
          </div>
          <button type="submit" class="btn theme-green mt-3">Aanmelden</button>
        </form>
        <hr class="my-5">
        <p class="mb-3">Of meld je aan met:</p>
        <div id="login-buttons" class="d-flex gap-3">
          <a href="#" id="itsme-button" class="btn btn-secondary"><img class="me-2" src="./assets/images/icons/itsme-auth.png" alt="">Aanmelden met itsme</a>
          <a href="#" id="id-button" class="btn btn-secondary"><img class="me-2" src="./assets/images/icons/id-auth-alt.png" alt="">Aanmelden met eID</a>
        </div>
      </div>
      
      <!-- Carousel -->
      <img id="login-image" src="./assets/images/login-image.jpg" alt="" class="rounded">
     </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./assets/js/app.js"></script>
  <!-- Bootstrap -->
   <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>