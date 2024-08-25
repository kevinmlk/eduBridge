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
  <title>Procedures | eduBridge Belgium</title>
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
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./../assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
          <a href="index.php" class="navbar-brand-small"><img class="me-2" src="./../assets/images/logo/logo-b.png" alt="eduBridge logo"></a>
          <ul class="nav d-flex gap-2">
            <li class="nav-item"><a href="./index.php" class="nav-link">Tijdslijn</a></li>
            <li class="nav-item"><a href="./simulator.php" aria-current="page" class="nav-link">Simulator</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">Procedures</a></li>
            <li class="nav-item"><a href="./info-hub.php" class="nav-link">Info hub</a></li>
            <li class="nav-item"><a href="./profile.php" class="nav-link">Profiel</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main>
    <!-- Procedures section -->
    <section id="intro-section" class="container  mt-5 mb-5">
        <div>
          <h2>Aanvragen op één plek</h2>
          <span class="tag-line theme-purple"></span>
        </div>

        <div class="d-flex justify-content-between align-items-center">
          <p class="mt-4">Al je procedure aanvragen op één handige hub. Voeg nieuwe  procedures toe en krijg inzicht in de voortgang van elke aanvraag.</p>
          <div class="d-flex gap-3">
            <a class="btn btn-outline-info" href="#"><i class="bi bi-mortarboard me-2"></i>Opleiding</a>
            <a class="btn btn-secondary" href="#">Procedure toevoegen</a>
          </div>
        </div>

        <div class="d-flex flex-column gap-3 mt-4">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-people me-2"></i>Volwassenprofiel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-person me-2"></i>Kinderprofiel</a>
            </li>
          </ul>
        </div>

        <div>
        <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="./../assets/images/aanvraag.png" class="card-img-top" alt="Studietoelagen">
          <div class="card-body">
            <h5 class="card-title">Studietoelagen</h5>
            <p class="card-text">Aanvraag studietoelagen voor het komende academiejaar werd ingediend</p>
            <div class="d-flex justify-content-between align-items-center">
              <span>2023 - 2024</span>
            </div>
            <div class="circular-chart">
              <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"/>
                <path class="circle"
                  stroke-dasharray="30, 100"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"/>
                <text x="18" y="20.35" class="percentage">30%</text>
              </svg>
            </div>
            <a href="./info.php" class="btn btn-outline-black w-100 mt-2">Meer info</a>
          </div>
        </div>
      </div>
    </div>
        </div>

     </section>


    
  </main>

  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/js/app.js"></script>
</body>
</html>
