<?php
  // Include bootstrap
  include_once(__DIR__ . '/../bootstrap.php');

  // Check if user is loggedin
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ./../login.php');
    exit;
  }

  // Get all user accommodations
  $userAccommodations = Accommodation::getUserAccommodations();
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
  <!-- Glide.js -->
  <link rel="stylesheet" href="./../assets/glide/css/glide.core.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./../assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./../assets/images/favicon/favicon.ico">
  <!-- Tab title -->
  <title>Info hub | eduBridge Belgium</title>
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
          <a href="./index.php" class="navbar-brand"><img class="me-2" src="./../assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
          <a href="./index.php" class="navbar-brand-small"><img class="me-2" src="./../assets/images/logo/logo-b.png" alt="eduBridge logo"></a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="./index.php" class="nav-link">Tijdslijn</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="./procedures.php" class="nav-link">Procedures</a></li>
              <li class="nav-item"><a href="#" aria-page="current" class="nav-link active">Info hub</a></li>
              <li class="nav-item"><a href="./profile.php" class="nav-link">Profiel</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="mb-5">
    <section>
      <div class="container d-flex flex-column justify-content-center align-items-center text-center gap-4">
        <div>
          <h2 class="mt-5">Welke tegemoetkomingen zijn er?</h2>
          <span class="tag-line theme-purple"></span>
        </div>
        <p>Hier kunt u enkele relevante ondersteuningen vinden die gebasseerd zijn op uw profiel. Klik op "meer info" om meer informatie te verkrijgen over de tegemoetkomingen en haar voorwaarden.</p>
      </div>

      <?php if (!empty($userAccommodations)): ?>
      <div class="glide my-5">
        <div class="glide__track" data-glide-el="track">
          <ul id="info-hub-glides-container" class="glide__slides">
            <?php foreach($userAccommodations as $accommodation): ?>
            <li class="glide__slide">
              <div class="card">
                <div class="card-body d-flex gap-2 flex-column py-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title"><?php echo $accommodation['Name']; ?></h5>
                    <i class="bi bi-lightbulb theme-blue py-1 px-2 rounded-circle"></i>
                  </div>
                  <p class="card-text"><?php echo $accommodation['Description']; ?></p>
                  <a href="<?php echo $accommodation['Link']; ?>" class="btn btn-link d-flex align-self-end" target="_blank">Meer info</a>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

      <div class="glide__arrows d-flex gap-3 justify-content-center mt-5" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">></button>
      </div>

    </div>
    <?php else: ?>
      <h5>Er zijn momenteel geen tegemoetkomingen voor u beschikbaar.</h5>
    <?php endif; ?>


    </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Glide.js scripts -->
  <script src="./../assets/glide/js/glide.min.js"></script>

  <script>
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      perView: 3,
      gap: 16,
      autoplay: 3000,
      bound: true,
      peek: {
        before: 100,
        after: 50
      },
      breakpoints: {
        1024: {
          perView: 2
        },
        600: {
          perView: 1
        }
      }
    }).mount()
  </script>


  <!-- Links JS scripts -->
  <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>