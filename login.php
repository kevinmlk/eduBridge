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
    <div class="container d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mt-2">
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
    <!-- Intro section -->
     <section class="container d-flex justify-content-between align-items-center mt-5 mb-5">
      <img src="./assets/images/home-intro-image.jpg" alt="" class="w-50 rounded">
      <div class="d-flex flex-column gap-4">
        <div>
          <h2>Aanmelden</h2>
          <span class="tag-line theme-blue"></span>
        </div>
        <p>Kies hieronder hoe u wil aanmelden. Klik op "meer info" voor uitleg over  die manier van aanmelden. Klik op de knop "hulp nodig?" (rechts) voor  veelgestelde vragen over aanmelden of om contact op te nemen met de  helpdesk.</p>
      </div>
     </section>

     <!-- Pillars section -->
      <section class="container d-flex flex-column justify-content-center mt-5 mb-5">
        <div class="text-center">
          <h2>Waarom eduBridge?</h2>
          <span class="tag-line theme-green"></span>
        </div>

        <!-- Pillars -->
         <div id="pillars-container" class="d-flex justify-content-between mt-5">
          <!-- Pillar 1 -->
          <div id="pillar-one" class="pillar position-relative rounded">
            <div class="bg-overlay rounded"></div>
            <div class="d-flex flex-column gap-3 position-absolute top-50 start-50 translate-middle w-75 mt-5 pt-5 text-center">
              <h3 class="theme-purple">Toegankelijk</h3>
              <p class="theme-purple">
                We willen educatie zo toegankelijk mogelijken maken voor iedereen.
              </p>
            </div>
          </div>

          <!-- Pillar 2 -->
          <div id="pillar-two" class="pillar position-relative rounded">
            <div class="bg-overlay rounded"></div>
            <div class="d-flex flex-column gap-3 position-absolute top-50 start-50 translate-middle w-75 mt-5 pt-5 text-center">
              <h3 class="theme-pink">Gepersonaliseerd</h3>
              <p class="theme-pink">
                Iedereen heeft zijn eigen gepersonaliseerde traject.
              </p>
            </div>
          </div>

          <!-- Pillar 3 -->
          <div id="pillar-three" class="pillar position-relative rounded">
            <div class="bg-overlay rounded"></div>
            <div class="d-flex flex-column gap-3 position-absolute top-50 start-50 translate-middle w-75 mt-5 pt-5 text-center">
              <h3 class="theme-blue">Transparant</h3>
              <p class="theme-blue">
              Wij willen zo transparant mogelijk met onze gebruikers communiceren.
              </p>
            </div>
          </div>

         </div>

         <a href="dashboard.php" class="btn theme-green mt-5 d-flex align-self-center">Ga naar dashboard</a>
      </section>

      <!-- Simulation section -->
     <section class="container d-flex justify-content-between align-items-center mt-5 mb-5">
      <div class="d-flex flex-column gap-4">
        <div>
          <h2>Simulaties en Procedures</h2>
          <span class="tag-line theme-blue"></span>
        </div>
        <p>Via ons platform kunt u op een eenvoudige manier simulaties uitvoeren uit om te zien welke financiële hulp je kunt krijgen en volg je aanvraagprocedures.</p>
        <p>Ontdek nu meteen zonder te registreren of dat u voor iets in aanmerkingen zou kunnen komen door snel eens langs door onze simulator!</p>
        <a href="simulator.php" class="btn theme-blue">Ontdek simulatie</a>
      </div>
      <img src="./assets/images/home-simulation-image.jpg" alt="" class="w-50 rounded">
     </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./assets/js/app.js"></script>
</body>
</html>