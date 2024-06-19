<?php
  // Check if user is already logged in
  session_start();

  if (isset($_SESSION['loggedin'])) {
    header('Location: roadmap.php');
    exit;
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
  <title>Authenticatie | eduBridge Belgium</title>
</head>
<body>
  <!-- Start header content -->
  <header class="mb-4">
    <!-- Language switcher container -->
    <div class="container d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mt-3">
      <ul class="language-switcher d-flex gap-2 p-0 mb-0">
        <li><a href="#">EN</a></li>
        <li><a href="#">FR</a></li>
        <li><a href="#" class="active-lang">NL</a></li>
        <li><a href="#">DE</a></li>
      </ul>
      <p class="fs-6">
        Officiële informatie en diensten: www.belgium.be
      </p>
    </div>

    <div class="theme-purple p-4">
      <!-- Navigation container -->
      <div id="navbar-alt-container" class="container">
        <a href="index.php" class="d-flex align-items-center"><img class="me-3 navbar-brand-alt" src="./assets/images/logo/edubridge-logo-white.svg" alt="eduBridge logo">www.eduBridge.be</a>
      </div>
    </div>
  </header>

  <!-- Start main -->
  <main class="d-flex flex-column gap-5 mb-5 pb-5">
      <!-- Authentication section -->
     <section class="container d-flex flex-column gap-4 mt-5 mb-5">
      <div class="d-flex flex-column gap-4 mb-4">
        <div>
          <h2>Aanmelden</h2>
          <span class="tag-line theme-blue"></span>
        </div>
        <p>Kies hieronder hoe u wil aanmelden. Klik op "meer info" voor uitleg over  die manier van aanmelden.</p>
        <p>Klik op de knop "hulp nodig?" (rechts) voor  veelgestelde vragen over aanmelden of om contact op te nemen met de  helpdesk.</p>
      </div>

      <div class="d-flex flex-wrap gap-5">
        <div class="login-card col-4 d-flex flex-column gap-4">
          <a href="./includes/authenticate.inc.php" class="d-flex align-items-top gap-4">
            <i class="bi bi-chevron-right"></i>
            <h5>eID en aangesloten kaartlezer</h5>
            <img class="justify-self-end" src="./assets/images/icons/id-auth.png" alt="Kaartlezer">
          </a>
          <span class="login-badge theme-green px-3 py-2 rounded ms-5">Veiligste keuze</span>
          <a href="#" class="btn btn-link d-flex align-self-end">Meer info</a>
        </div>

        <div class="login-card col-4 d-flex flex-column gap-4">
          <a href="#" class="d-flex justify-content-between align-items-top gap-4 mb-3">
            <i class="bi bi-chevron-right"></i>
            <h5 class="align-self-start justify-self-start">itsme®</h5>
            <img class="justify-self-end" src="./assets/images/icons/itsme-auth.png" alt="Kaartlezer">
          </a>
          <a href="#" class="btn btn-link d-flex align-self-end mt-5">Meer info</a>
        </div>
      </div>
     </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./assets/js/app.js"></script>
</body>
</html>