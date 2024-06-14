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
          <ul id="language-switcher" class="d-flex gap-2 p-0 mb-0">
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
              <li class="nav-item"><a href="./contact.php" class="nav-link">Profiel</a></li>
              <li class="nav-item ms-3"><a href="./login.php" class="btn btn-primary"><i class="bi bi-person-circle me-2"></i>Aanmelden</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="d-flex flex-column gap-5 mb-5">
    <!-- Hero section -->
    <section id="home-hero" class="position-relative mb-5">
      <div class="bg-overlay"></div>
      <div class="container d-flex flex-column gap-4 position-absolute top-50 start-50 translate-middle">
      <div>
        <h1>Ontgrendel uw<br> educatieve reis</h1>
        <span class="tag-line theme-pink"></span>
      </div>
      <p>
      Bij eduBridge geloven we dat onderwijs voor iedereen toegankelijk moet zijn.
      </p>
      
      <p>
      Of u nu een student, een ouder of een volwassen leerling bent, wij zijn er om u bij elke stap te ondersteunen.
      </p>
      </div>
    </section>

    <!-- Intro section -->
     <section class="container d-flex justify-content-between align-items-center mt-5 mb-5">
      <img src="./assets/images/home-intro-image.jpg" alt="" class="w-50 rounded">
      <div class="d-flex flex-column gap-4">
        <div>
          <h2>Wat is eduBridge?</h2>
          <span class="tag-line theme-blue"></span>
        </div>
        <p>EduBridge is een innovatief platform dat alle beschikbare educatieve  hulpmiddelen en ondersteuning op één plek samenbrengt. Ons doel is om  het proces van het vinden en aanvragen van educatieve ondersteuning  eenvoudig en transparant te maken. </p>
        <p>Of je nu op zoek bent naar financiële  hulp, informatie over cursussen, of begeleiding bij je leertraject,  EduBridge biedt een gepersonaliseerde ervaring die speciaal is afgestemd  op jouw behoeften.</p>
      </div>
     </section>

     <!-- Pillars section -->
      <section class="container mt-5 mb-5">
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
      </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script scr="./assets/js/app.js"></script>
</body>
</html>