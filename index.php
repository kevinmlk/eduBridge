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
  <title>Welkom bij eduBridge | eduBridge Belgium</title>
</head>
<body>
  <!-- Start header content -->
  <header class="mb-5">
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container">
        <!-- Language switcher container -->
        <div class="d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mb-5 mt-2">
          <ul id="language-switcher" class="d-flex gap-2 p-0 mb-0">
            <li><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#" class="active-lang">NL</a></li>
            <li><a href="#">DE</a></li>
          </ul>
          <div id="notification-container">
            <a href=""><i class="bi bi-bell me-2"></i>Notificaties(3)</a>
            <a href=""><i class="bi bi-box-arrow-right me-2"></i>Afmelden</a>
          </div>
        </div>

        <!-- Navigation container -->
        <div class="d-flex w-100 justify-content-between align-items-center">
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
            <ul class="nav">
              <li class="nav-item"><a href="about.php" aria-page="current" class="nav-link active">Roadmap</a></li>
              <li class="nav-item"><a href="news.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="faq.php" class="nav-link">Procedures</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Info hub</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Profiel</a></li>
              <li class="nav-item ms-3"><a href="login.php" class="btn btn-primary"><i class="bi bi-person-circle me-2"></i>Kinderprofiel</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main content -->
  <main>
    <section class="container">
      <h2 class="text-center">Welkom terug, Lisa!</h2>
    </section>
  </main>

  <!-- Start footer content -->
  <footer>

  </footer>

  <!-- Links JS scripts -->
  <script scr="./assets/js/app.js"></script>
</body>
</html>