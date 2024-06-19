<?php
  // Check if user is loggedin
  session_start();

  if (!isset($_SESSION['results'])) {
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
  <title>Simulator resultaat | eduBridge Belgium</title>
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
          <a href="./roadmap.php" class="navbar-brand"><img class="me-2" src="./../assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="./roadmap.php" class="nav-link">Roadmap</a></li>
              <li class="nav-item"><a href="#" aria-current="page" class="nav-link active">Simulator</a></li>
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
    <section class="container d-flex flex-column justify-content-center align-items-center gap-4 mt-5 mb-5">
      <div class="text-center">
        <h2>Simulatie tegemoetkoming</h2>
        <span class="tag-line theme-purple"></span>
      </div>
      <!-- Positive results container -->
      <div id="positive-container" class=" d-flex flex-column justify-content-center align-items-center gap-4">

      <p class="text-center">Je zou in aanmerking kunnen komen voor een studietoelagen om jouw opleiding te financieren.</p>
      <!-- Options container -->
      <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
        <!-- First option -->
        <div id="positive-check" class="d-flex flex-column justify-content-center align-items-center gap-4">
          <i class="bi bi-check-lg theme-green"></i>
        </div>
      </div>
      <p class="text-center">Dit resultaat is louter informatief en heeft geen juridische  bewijskracht. Ingave van verkeerde of onvolledige gegevens kunnen ertoe  leiden dat de uitkomst verschilt van het resultaat van uw aanvraag.</p>
      </div>

      <div class="d-flex justify-content-center align-items-center gap-4 mt-4">
        <a href="#" id="begin-procedure" class="btn theme-blue">Begin procedure</a>
        <a href="./simulator.php" id="cancel-button" class="btn btn-secondary">Nieuwe simulatie</a>
      </div>
    </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>
</body>
</html>