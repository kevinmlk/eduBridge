<?php
  // Include bootstrap
  include_once(__DIR__ . '/../bootstrap.php');
  // Check if user is loggedin
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ./../login.php');
    exit;
  }

  // Get user procedures
  $procedures = Procedure::getUserProcedures();
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
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./../assets/images/favicon/favicon.ico">
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
        <div id="top-navbar" class="d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mb-4 mt-2">
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
        <div id="navigation-container-alt" class="d-flex w-100 justify-content-between align-items-center">
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

      <div id="procedures-intro" class="d-flex justify-content-between align-items-center">
        <p class="mt-4">Al je procedure aanvragen op één handige hub. Voeg nieuwe  procedures toe en krijg inzicht in de voortgang van elke aanvraag.</p>
        <a class="btn btn-secondary" href="#">Procedure toevoegen</a>
      </div>

      <div class="d-flex flex-column gap-3 mt-4">
        <ul class="nav nav-pills d-flex gap-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-people me-2"></i>Volwassenprofiel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-person me-2"></i>Kinderprofiel</a>
          </li>
        </ul>
      </div>

      <!-- Procedures container -->
      <?php if (!empty($procedures)): ?>
      <div id="procedures-cards-container" class="d-flex flex-wrap gap-5 mt-5">
        <?php foreach ($procedures as $procedure): ?>
        <!-- Profile info -->
        <div class="card rounded-4">
          <div class="position-relative">
            <img src="./../assets/images/procedure-1.jpg" class="card-img-top rounded-4" alt="">
            <i class="bi bi-person-circle theme-blue py-1 px-2 rounded-circle position-absolute top-0 start-0 mt-3 ms-3"></i>
          </div>
          <div class="card-body d-flex flex-column gap-2">
            <h5 class="card-title d-flex justify-content-between"><?php echo $procedure['Title']; ?></h5>
            <p class="card-subtitle fs-6">
              <?php echo $procedure['Period']; ?>
            </p>
            <p class="card-text">
              <?php echo $procedure['DescriptionStatus']; ?>
            </p>
            <a href="procedure-details.php?id=<?php echo $procedure['ProcedureId']; ?>" class="btn btn-secondary align-self-end mt-3">Meer info</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php else: ?>
      <h5>Er zijn momenteel geen procedures beschikbaar.</h5>
      <?php endif; ?>
    </section>


    
  </main>

  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/js/app.js"></script>
</body>
</html>
