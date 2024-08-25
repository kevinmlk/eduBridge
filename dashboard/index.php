<?php
  // Check if user is loggedin
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ./../login.php');
    exit;
  }
?><!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Reset CSS -->
  <link rel="stylesheet" href="./../assets/css/reset.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./../assets/bootstrap/icons/font/bootstrap-icons.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./../assets/css/style.css">
  <!-- Tab title -->
  <title>Tijdslijn | eduBridge Belgium</title>
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
          <div id="notification-container">
            <a href="#"><i class="bi bi-bell me-2"></i>Notificaties (3)</a>
            <a href="./../includes/logout.inc.php"><i class="bi bi-box-arrow-right me-2"></i>Afmelden</a>
          </div>
        </div>

        <!-- Navigation container -->
        <div class="d-flex w-100 justify-content-between align-items-center">
          <a href="#" class="navbar-brand"><img class="me-2" src="./../assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="#" aria-page="current" class="nav-link active">Tijdslijn</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="./procedures.php" class="nav-link">Procedures</a></li>
              <li class="nav-item"><a href="./info-hub.php" class="nav-link">Info hub</a></li>
              <li class="nav-item"><a href="./profile.php" class="nav-link">Profiel</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="mb-5">
    <section>
      <h2 class="text-center mt-5">Welkom terug, Lisa!</h2>
      <!-- Timeline container -->
      <div class="timeline-wrapper">
        <ul class="timeline">
          <!-- Timeline item -->
          <li data-date="Jan 7, 2022">
            <span class="title">Mothers birthday</span>
            <div class="data show">
              <h3>Day you've been waiting for</h3>
              <small>Jan 7, 2022</small>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <small class="close">Click to close</small>
            </div>
          </li>
          <!-- Timeline item -->
          <li data-date="Jan 7, 2022">
            <span class="title">Mothers birthday</span>
            <div class="data">
              <h3>Day you've been waiting for</h3>
              <small>Jan 7, 2022</small>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <small class="close">Click to close</small>
            </div>
          </li>
        </ul>
      </div>

    </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>