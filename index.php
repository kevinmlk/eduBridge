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
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- Tab title -->
  <title>Welkom bij eduBridge | eduBridge Belgium</title>
</head>
<body>
  <!-- Start header content -->
  <header class="mb-5">
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container montserrat-label">
        <!-- Language switcher container -->
        <div class="d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mb-5 mt-2">
          <ul id="language-switcher" class="d-flex gap-2 p-0 mb-0">
            <li><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#" class="active-lang">NL</a></li>
            <li><a href="#">DE</a></li>
          </ul>
          <span>Official information and services: www.belgium.be</span>
        </div>

        <!-- Navigation container -->
        <div class="d-flex w-100 justify-content-between align-items-center">
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
          <ul class="nav montserrat-title">
            <li class="nav-item"><a href="about.php" class="nav-link">Over</a></li>
            <li class="nav-item"><a href="news.php" class="nav-link">Nieuws</a></li>
            <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item ms-3"><a href="login.php" class="btn btn-primary"><i class="bi bi-person-circle me-2"></i>Aanmelden</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main content -->
  <main>
    <section id="hero-image-container" class="position-relative">
      <!-- Dark overlay -->
      <div id="dark-overlay" class="position-absolute opacity-25"></div>
      
      <!-- Hero image content -->
      <div id="hero-image-content" class="position-absolute top-50 start-0 translate-middle-y">
        <h1 class="montserrat-display mb-5">Ontgrendel uw educatieve reis</h1>
        <p class="montserrat-body">
          Bij eduBridge geloven wij dat onderwijs voor iedereen toegankelijk moet zijn.
        </p>
        <p class="montserrat-body">
          Of u nu een student, een ouder of een volwassen leerling bent, wij zijn er om u
          bij elke stap te ondersteunen.
        </p>
      </div>

      <!-- hero image background -->
      <div id="hero-image"></div>
    </section>
  </main>

  <!-- Start footer content -->
  <footer>

  </footer>

  <!-- Links JS scripts -->
  <script scr="./assets/js/app.js"></script>
</body>
</html>