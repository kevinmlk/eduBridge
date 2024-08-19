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
  <title>Welkom bij eduBridge | eduBridge Belgium</title>
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
              <li class="nav-item"><a href="./index.php" class="nav-link">Roadmap</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="./aanvraag.php" class="nav-link">Procedures</a></li>
              <li class="nav-item"><a href="./info-hub.php" class="nav-link">Info hub</a></li>
              <li class="nav-item"><a href="#" aria-page="current" class="nav-link active">Profiel</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="mb-5">
    <section class="container">
      <div class="d-flex flex-column justify-content-center align-items-center text-center gap-4">
        <div>
          <h2 class="mt-5">Persoonlijke informatie</h2>
          <span class="tag-line theme-purple"></span>
        </div>
        <p>Informatie over jezelf en je voorkeuren voor edubridge-services.</p>
      </div>

      <!-- Cards container -->
      <div id="profile-cards-container" class="d-flex flex-wrap gap-5 mt-5">
        <!-- Profile info -->
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Profielgegevens</h3>
            <p class="card-subtitle">
              Bepaalde informatie hebben wij van uw burgerprofiel gehaald en kunt u mogelijk niet aanpassen.
            </p>
  
            <!-- List group -->
            <ul class="list-group list-group-flush d-flex flex-column gap-3 mt-3">
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Naam</span>
                <span>John Doe</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geboortedatum</span>
                <span>2 April 1989</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geslacht</span>
                <span>Vrouwelijk</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Kinderen</span>
                <span>1</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Contact info -->
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Contactgegevens</h3>
            <p class="card-subtitle">
              Bepaalde informatie hebben wij van uw burgerprofiel gehaald en kunt u mogelijk niet aanpassen.
            </p>
  
            <!-- List group -->
            <ul class="list-group list-group-flush d-flex flex-column gap-3 mt-3">
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Naam</span>
                <span>John Doe</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geboortedatum</span>
                <span>2 April 1989</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geslacht</span>
                <span>Vrouwelijk</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Kinderen</span>
                <span>1</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Education info -->
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Educatie verleden</h3>
            <p class="card-subtitle">
              Bepaalde informatie hebben wij van uw burgerprofiel gehaald en kunt u mogelijk niet aanpassen.
            </p>
  
            <!-- List group -->
            <ul class="list-group list-group-flush d-flex flex-column gap-3 mt-3">
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Naam</span>
                <span>John Doe</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geboortedatum</span>
                <span>2 April 1989</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geslacht</span>
                <span>Vrouwelijk</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Kinderen</span>
                <span>1</span>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Profile info -->
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Interesse's & voorkeuren</h3>
            <p class="card-subtitle">
              Bepaalde informatie hebben wij van uw burgerprofiel gehaald en kunt u mogelijk niet aanpassen.
            </p>
  
            <!-- List group -->
            <ul class="list-group list-group-flush d-flex flex-column gap-3 mt-3">
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Naam</span>
                <span>John Doe</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geboortedatum</span>
                <span>2 April 1989</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Geslacht</span>
                <span>Vrouwelijk</span>
              </li>
              <li class="list-group-item d-flex gap-5">
                <span class="fw-bold w-25 mb-1">Kinderen</span>
                <span>1</span>
              </li>
            </ul>
          </div>
        </div>

      </div>


    </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>