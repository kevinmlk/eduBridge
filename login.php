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
  <!-- Tab title -->
  <title>Aanmelden | eduBridge Belgium</title>
</head>
<body>
  <!-- Start header content -->
  <header class="mb-4">
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container">
        <!-- Language switcher container -->
        <div class="d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mb-4 mt-2">
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
        <div class="d-flex w-100 justify-content-between align-items-center">
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="d-flex flex-column gap-5 mb-5 pb-5">

    <!-- Intro section -->
     <section class="container d-flex gap-5 mt-5 mb-5">
      <div class="col">
        <div>
          <h2>Welkom terug</h2>
          <span class="tag-line theme-blue"></span>
          <p class="mt-4">
            Vul de inputvelden in met uw gegevens om aan te melden.
          </p>
        </div>
        <form action="login.php" method="post" class="mt-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Wachtwoord</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <button type="submit" class="btn theme-green">Aanmelden</button>
        </form>
      </div>
      
      <!-- Carousel -->
      <div id="carouselExampleAutoplaying" class="carousel slide col" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/pillar-image-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/images/pillar-image-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/images/pillar-image-3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
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