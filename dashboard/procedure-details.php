<?php
  // Include bootstrap
  include_once(__DIR__ . '/../bootstrap.php');

  // Check if user is loggedin
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ./../login.php');
    exit;
  }

  // Controleert of dat er een id werd meegegeven
  if (!isset($_GET['id'])) {
    exit('404 - not found');
  } else {
    // Get the id from the URL with $_GET
    $id = $_GET['id'];
  }

  // Get procedure data
  $procedure = new Procedure();
  $procedure->setId($id);
  $procedureData = $procedure->getProcedureData();

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
  <title><?php echo $procedureData['Title']; ?> | eduBridge Belgium</title>
</head>
<body class="d-flex flex-column min-vh-100">
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
            <li class="nav-item"><a href="./procedures.php" class="nav-link active">Procedures</a></li>
            <li class="nav-item"><a href="./info-hub.php" class="nav-link">Info hub</a></li>
            <li class="nav-item"><a href="./profile.php" class="nav-link">Profiel</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main>
    <section class="container">
      <div class="d-flex flex-column justify-content-center align-items-center text-center gap-4">
        <div>
            <h2 class="mt-5"><?php echo $procedureData['Title']; ?> procedure</h2>
            <span class="tag-line theme-purple"></span>
        </div>
        <p>Al je procedure aanvragen op één handige hub. Voeg nieuwe  procedures toe en krijg inzicht in de voortgang van elke aanvraag.</p>
      </div>

      <!-- Procedure info -->
       <div id="procedure-details-container" class="d-flex justify-content-between align-items-center my-5">
         <div class="card procedure-card">
          <div class="card-body">
            <div id="procedure-card-title" class="d-flex justify-content-between align-items-center mb-3">
              <div>
                <h3 class="card-title"><?php echo $procedureData['Title']; ?></h3>
                <span class="tag-line theme-green"></span>
              </div>
              <h6 class="card-subtitle text-body-secondary">Verbonden op <?php echo $procedureData['StartDate']; ?></h6>
            </div>
            <p class="card-text"><?php echo $procedureData['Description']; ?></p>
            <!-- List group -->
            <ul class="list-group list-group-flush d-flex flex-column gap-3 mt-3">
              <li class="list-group-item d-flex align-items-center gap-5">
                <span class="fw-bold w-25 mb-1">Vorige fase</span>
                <span><?php echo $procedureData['PreviousPhase']; ?></span>
                <i class="bi bi-check-circle theme-green py-2 px-2 ms-5 rounded-circle d-flex justify-content-center align-items-center"></i>
              </li>
              <li class="list-group-item d-flex align-items-center gap-5">
                <span class="fw-bold w-25 mb-1">Huidige fase</span>
                <span><?php echo $procedureData['CurrentPhase']; ?></span>
              </li>
              <li class="list-group-item d-flex align-items-center gap-5">
                <span class="fw-bold w-25 mb-1">Volgende fase</span>
                <span><?php echo $procedureData['NextPhase']; ?></span>
              </li>
            </ul>
            <!-- Progress bar -->
            <div class="progress my-3" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $procedureData['StatusPercentage']; ?>" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar theme-purple" style="width: <?php echo $procedureData['StatusPercentage']; ?>%"><?php echo $procedureData['StatusPercentage']; ?>%</div>
            </div>

          </div>
        </div>

        <div class="d-flex flex-column gap-4">
          <p>Bezoek de website van studietoelagen voor een meer gedetailleerder overzicht te raadplegen over je aanvraagprocedure.</p>
          <a href="<?php echo $procedureData['Link']; ?>" class="btn btn-secondary" target="_blank">Ga naar studietoelagen</a>
        </div>
       </div>
    </section>
  </main>

  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/js/app.js"></script>
</body>
</html>
