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
        <div id="top-navbar" class="d-flex w-100 align-items-center justify-content-between border-bottom pb-3 mb-4 mt-2">
          <ul class="language-switcher d-flex gap-2 p-0 mb-0">
            <li><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#" class="active-lang">NL</a></li>
            <li><a href="#">DE</a></li>
          </ul>
          <p id="belgium-link" class="fs-6">
            Officiële informatie en diensten: <a href="https://www.belgium.be" target="_blank">www.belgium.be</a>
          </p>
        </div>

        <!-- Navigation container -->
        <div id="navigation-container" class="d-flex w-100 justify-content-between align-items-center">
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
          <a href="index.php" class="navbar-brand-small"><img class="me-2" src="./assets/images/logo/logo-b.png" alt="eduBridge logo"></a>
          <div class="d-flex gap-4">
            <a href="./login.php" class="btn theme-blue">Ontdek simulator</a>
            <a href="./login.php" class="btn theme-green"><i class="bi bi-person-circle me-2"></i>Aanmelden</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="d-flex flex-column gap-5 mb-5 pb-5">
    <!-- Hero section -->
    <section id="home-hero" class="position-relative mb-5">
      <div class="bg-overlay"></div>
      <div id="home-hero-text" class="container d-flex flex-column gap-4 position-absolute top-50 start-50 translate-middle">
        <div>
          <h1>Ontgrendel uw<br> educatieve reis</h1>
          <span class="tag-line theme-pink"></span>
        </div>
        <p>
        Bij eduBridge geloven we dat onderwijs voor iedereen toegankelijk moet zijn.
        </p>
        
        <p>
        Met onze simulator kunnen we samen na gaan welke stappen je moet nemen om je educatieve reis te ontgrendelen.
        </p>

        <a href="simulator.php" class="btn theme-blue mt-3">Ontdek simulator</a>
      </div>
    </section>

    <!-- Intro section -->
     <section class="media-image container d-flex justify-content-between align-items-center mt-5 mb-5">
      <img src="./assets/images/home-intro-image.jpg" alt="" class="w-50 rounded">
      <div class="d-flex flex-column gap-4">
        <div>
          <h2>Wat is eduBridge?</h2>
          <span class="tag-line theme-blue"></span>
        </div>
        <p>EduBridge is een innovatief platform dat alle beschikbare educatieve  hulpmiddelen en ondersteuning op één plek samenbrengt. Ons doel is om  het proces van het vinden en aanvragen van educatieve ondersteuning  eenvoudig en transparant te maken. </p>
        <a href="./login.php" class="btn theme-green d-flex mt-3">Ga naar dashboard</a>
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
              <h4 class="theme-purple">Toegankelijk</h4>
              <p class="theme-purple">
                We willen educatie zo toegankelijk mogelijken maken voor iedereen.
              </p>
            </div>
          </div>

          <!-- Pillar 2 -->
          <div id="pillar-two" class="pillar position-relative rounded">
            <div class="bg-overlay rounded"></div>
            <div class="d-flex flex-column gap-3 position-absolute top-50 start-50 translate-middle w-75 mt-5 pt-5 text-center">
              <h4 class="theme-pink">Gepersonaliseerd</h4>
              <p class="theme-pink">
                Iedereen heeft zijn eigen gepersonaliseerde traject.
              </p>
            </div>
          </div>

          <!-- Pillar 3 -->
          <div id="pillar-three" class="pillar position-relative rounded">
            <div class="bg-overlay rounded"></div>
            <div class="d-flex flex-column gap-3 position-absolute top-50 start-50 translate-middle w-75 mt-5 pt-5 text-center">
              <h4 class="theme-blue">Transparant</h4>
              <p class="theme-blue">
              Wij willen zo transparant mogelijk met onze gebruikers communiceren.
              </p>
            </div>
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