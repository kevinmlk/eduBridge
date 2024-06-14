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
  <main class="d-flex flex-column gap-5 mb-5 pb-5">

    <!-- Intro section -->
     <section class="container d-flex flex-column justify-content-center align-items-center gap-4 mt-5 mb-5 text-center">
        <div>
          <h2>Wat is eduBridge?</h2>
          <span class="tag-line theme-purple"></span>
        </div>

        <div class="d-flex flex-column gap-3">
          <p>Vertel ons over je educatieve plannen en ontvang een gepersonaliseerde  simulatie van het aanvraagproces voor financiële ondersteuning.</p>
          <p>Geef ons meer informatie over uw situatie door de onderstaande vragen te beantwoorden en wij zullen nakijken of dat je in aanmerking zou kunnen komen voor financiële hulpmiddelen voor een permanente vorming.</p>
        </div>

        <div class="d-flex flex-column align-items-center gap-3 mt-5">
          <h3>Disclaimer</h3>
          <p>De simulatie heeft geen juridische bewijskracht. Onjuist gebruik van de toepassing, wijzigende parameters of de invoer van verkeerde gegevens kunnen zorgen voor een resultaat dat verschilt van de echte aanvraag.</p>
          <a href="./contact.php" class="btn theme-blue mt-4">Start simulatie</a>
        </div>
     </section>

  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script scr="./assets/js/simulator.js"></script>
</body>
</html>