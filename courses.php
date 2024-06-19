<!DOCTYPE html>
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
  <title>kies jouw richting</title>
  <style>
    .custom-margin {
      margin-bottom: 8px !important;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
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
          <p class="fs-6">
            Officiële informatie en diensten: www.belgium.be
          </p>
        </div>

        <!-- Navigation container -->
        <div class="d-flex w-100 justify-content-between align-items-center">
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="./about.php" aria-page="current" class="nav-link active">Over</a></li>
              <li class="nav-item"><a href="./news.php" class="nav-link">Nieuws</a></li>
              <li class="nav-item"><a href="./faq.php" class="nav-link">FAQ</a></li>
              <li class="nav-item"><a href="./contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item ms-3"><a href="./login.php" class="btn theme-green"><i class="bi bi-person-circle me-2"></i>Aanmelden</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="flex-grow-1 d-flex justify-content-center align-items-center text-center">
    <!-- Hero section -->
    <section id="intro-section" class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="custom-margin">Mijn Opleidingen</h2>
          <span class="tag-line theme-purple d-block mx-auto mb-3" style="width: 50px; height: 4px; background-color: #A0A0FF;"></span>
        </div>
        <div class="col-12 col-md-8 col-lg-6 custom-margin">
          <p class="custom-margin">Log in met Smartschool en ontdek welke opleiding het best bij jouw past, en waar je moet bijbenen.</p>
        </div>
        <div class="col-12">
          <a href="advice.php" class="btn d-flex align-items-center justify-content-center mx-auto" style="background-color: #FF720E; color: white; width: fit-content;">
            <img src="./assets/images/smartschoolicon.png" alt="Smartschool icon" class="me-2" style="width: 24px; height: 24px;">
            Log in met Smartschool
          </a>
        </div>
      </div>
    </section>
  </main>

  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./assets/js/app.js"></script>
</body>
</html>
