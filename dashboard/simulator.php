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
    <!-- Intro section -->
    <section id="intro-section" class="container d-flex flex-column justify-content-center align-items-center gap-4 mt-5 mb-5 text-center">
        <div>
          <h2>Simuleer jouw leerroute</h2>
          <span class="tag-line theme-purple"></span>
        </div>

        <div class="d-flex flex-column gap-3">
          <p>Vertel ons over je educatieve plannen en ontvang een gepersonaliseerde  simulatie van het aanvraagproces voor financiële ondersteuning.</p>
          <p>Geef ons meer informatie over uw situatie door de onderstaande vragen te beantwoorden en wij zullen nakijken of dat je in aanmerking zou kunnen komen voor financiële hulpmiddelen voor een permanente vorming.</p>
        </div>
        <a href="#" id="start-button" class="btn theme-blue mt-4">Start simulatie</a>
     </section>

     <!-- Simulation section -->
      <section id="simulation-section" class="container d-flex flex-column justify-content-center align-items-center gap-4 mt-5 mb-5 d-none">
        <div class="text-center">
          <h2>Simulatie tegemoetkoming</h2>
          <span class="tag-line theme-purple"></span>
        </div>
        <!-- Situation container -->
        <div id="situation-container" class="d-flex flex-column gap-3">
          <p class="text-center">Selecteer een antwoord die het best bij jouw huidige situatie past.</p>
          <!-- Options container -->
          <div id="options-container" class="d-flex justify-content-between mt-4">
            <!-- First option -->
            <div id="option-parent" class="simulation-option d-flex flex-column justify-content-center align-items-center gap-4">
                <i class="bi bi-people-fill"></i>
              <span>Verder gaan als ouder</span>
            </div>
            <!-- Second option -->
            <div id="option-adult" class="simulation-option d-flex flex-column justify-content-center align-items-center gap-4">
                <i class="bi bi-person-walking"></i>
              <span>Verder gaan als volwassen (18+)</span>
            </div>
            <!-- Third option -->
            <div id="option-minor" class="simulation-option d-flex flex-column justify-content-center align-items-center gap-4">
                <i class="bi bi-person-arms-up"></i>
              <span>Verder gaan als minderjarige (18-)</span>
            </div>
          </div>
        </div>

        <div id="education-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">
          <p class="text-center">Selecteer welke soort educatie je wilt gaan volgen.</p>
          <div id="education-options" class="d-flex flex-column justify-content-center gap-4">
            <!-- First option -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="education-option" id="option-university">
              <label class="form-check-label" for="universiteit-option">
                Universitaire opleiding
              </label>
            </div>
            <!-- First option -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="education-option" id="option-college">
              <label class="form-check-label" for="hogeschool-option">
                Hogeschoolopleiding
              </label>
            </div>
            <!-- First option -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="education-option" id="beroeps-option">
              <label class="form-check-label" for="beroeps-option">
                Beroepsopleiding
              </label>
            </div>
            <!-- First option -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="education-option" id="duaal-option">
              <label class="form-check-label" for="duaal-option">
                Duaal leren
              </label>
            </div>
            <!-- First option -->
            <div class="form-check">
              <input class="form-check-input" type="radio" name="education-option" id="volwassen-option">
              <label class="form-check-label" for="volwassen-option">
                Volwassenonderwijs
              </label>
            </div>

          </div>
        </div>

        <!-- Education past container -->
         <div id="education-past-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

          <p class="text-center">Heb je al een opleiding gevolgd in het hoger onderwijs?</p>
          <!-- Options container -->
          <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
            <!-- First option -->
            <div id="edupast-option-yes" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Ja</span>
            </div>
            <!-- Second option -->
            <div id="edupast-option-no" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Nee</span>
            </div>
          </div>

         </div>
         
        <!-- Studypoints container -->
         <div id="studypoints-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

          <p class="text-center">Heb je meer dan 60 studiepunten over?</p>
          <!-- Options container -->
          <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
            <!-- First option -->
            <div id="studypoints-option-yes" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Ja</span>
            </div>
            <!-- Second option -->
            <div id="studypoints-option-no" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Nee</span>
            </div>
          </div>
          <p class="text-center">
          Meld je aan met itsme® om te weten te komen hoeveel studiepunten je nog over hebt en zo een meer gedetailleerd resultaat te krijgen.
          </p>

         </div>
         
         <!-- Behalf of container -->
         <div id="behalf-of-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

          <p class="text-center">Ben je nog ten laste van jouw ouders?</p>
          <!-- Options container -->
          <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
            <!-- First option -->
            <div id="behalf-of-option-yes" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Ja</span>
            </div>
            <!-- Second option -->
            <div id="behalf-of-option-no" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Nee</span>
            </div>
          </div>

         </div>

         <!-- Income container -->
         <div id="income-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

          <p class="text-center">Zijn je inkomsten hoger dan € 22.011,47?</p>
          <!-- Options container -->
          <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
            <!-- First option -->
            <div id="income-option-yes" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Ja</span>
            </div>
            <!-- Second option -->
            <div id="income-option-no" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Nee</span>
            </div>
          </div>

          <p class="text-center">
            Als je niet weet hoeveel je inkomsten van het voorbij jaar bedroegen, kun je snel even met itsme® inloggen om deze na te gaan en een gedetailleerd resultaat te krijgen.
          </p>

         </div>

         <!-- Schooltoeslag container -->
         <div id="schooltoeslag-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

          <p class="text-center">Had(den) je ouder(s) recht op een Schooltoeslag tijdens het basis- en secundair onderwijs?</p>
          <!-- Options container -->
          <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
            <!-- First option -->
            <div id="schooltoeslag-option-yes" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Ja</span>
            </div>
            <!-- Second option -->
            <div id="schooltoeslag-option-no" class="simulation-option-alt d-flex flex-column justify-content-center align-items-center gap-4">
                <span>Nee</span>
            </div>
          </div>

         </div>

        <div class="d-flex justify-content-center align-items-center gap-4 mt-4">
          <a href="#" id="return-button" class="d-none"><i class="bi bi-arrow-return-left"></i>Terug naar vorige vraag</a>
          <a href="login.php" id="itsme-button" class="d-none btn btn-secondary">Meld je aan met itsme <img class="ms-2" src="./../assets/images/icons/itsme-auth.png" alt=""></a>
          <a href="simulator.php" id="cancel-button" class="btn btn-secondary">Annuleer simulatie</a>
        </div>

      </section>

      <section id="results-section" class="d-none container d-flex flex-column justify-content-center align-items-center gap-4 mt-5 mb-5 d-none">
        <div class="text-center">
          <h2>Simulatie tegemoetkoming</h2>
          <span class="tag-line theme-purple"></span>
        </div>
        <!-- Positive results container -->
        <div id="positive-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

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

        <!-- Negative results container -->
        <div id="negative-container" class="d-none d-flex flex-column justify-content-center align-items-center gap-4">

        <p class="text-center">Volgens onze simulatie, zal je niet in aanmerking komen voor financiële tegemoetkoming om uw opleiding te financieren.</p>
        <!-- Options container -->
        <div id="options-container" class="d-flex justify-content-center gap-5 mt-4">
          <!-- First option -->
          <div id="positive-check" class="d-flex flex-column justify-content-center align-items-center gap-4">
          <i class="bi bi-ban theme-pink"></i>
          </div>
        </div>
        <p class="text-center">Dit resultaat is louter informatief en heeft geen juridische  bewijskracht. Ingave van verkeerde of onvolledige gegevens kunnen ertoe  leiden dat de uitkomst verschilt van het resultaat van uw aanvraag.</p>
        </div>

        <div class="d-flex justify-content-center align-items-center gap-4 mt-4">
          <a href="dashboard.php" id="begin-procedure" class="d-none btn theme-blue">Begin procedure</a>
          <a href="simulator.php" id="cancel-button" class="btn btn-secondary">Nieuwe simulatie</a>
        </div>
      </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/js/simulator.js"></script>
</body>
</html>