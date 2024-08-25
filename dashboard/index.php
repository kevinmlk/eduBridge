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
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./../assets/images/favicon/favicon.ico">
  <!-- Tab title -->
  <title>Tijdslijn | eduBridge Belgium</title>
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
          <a href="#" class="navbar-brand"><img class="me-2" src="./../assets/images/logo/logo-belgium.png" alt="eduBridge logo"></a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="#" aria-page="current" class="nav-link active">Tijdslijn</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
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
    <section>
      <div class="d-flex flex-column justify-content-center align-items-center mt-5">
        <h2>Welkom terug, Lisa!</h2>
        <span class="tag-line theme-purple"></span>
        <p class="mt-4">Traceer je educatieve reis vanaf het moment dat je begon tot waar je nu bent, en zie hoe ver je al gekomen bent!</p>
      </div>
      <!-- Timeline container -->
      <div class="timeline">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <!-- Timestamp -->
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                <h4>2018</h4>
                <i class="bi bi-bullseye"></i>
              </button>
              <!-- Timestamp -->
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                <h4>2019</h4>
                <i class="bi bi-bullseye"></i>
              </button>
              <!-- Timestamp -->
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                <h4>2020</h4>
                <i class="bi bi-bullseye"></i>
              </button>
              <!-- Timestamp -->
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
                <h4>Toekomst</h4>
                <i class="bi bi-bullseye"></i>
              </button>
            </div>
            <!-- Carousel container -->
            <div class="carousel-inner">
              <!-- Carousel item -->
              <div class="carousel-item active">
                <div class="experience-slide-one row h-100 align-items-center">
                  <!-- Image -->
                  <div class="col-md-5">
                    <div class="experience-slide-img">
                      <img class="rounded img-fluid" src="./../assets/images/pillar-image-1.jpg" alt="2018 image">
                    </div>
                  </div>
                  <!-- Text -->
                  <div class="col-md-7">
                    <div class="experience-slide-text">
                      <h3>2018</h3>
                      <p>Lorem ipsum </p>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- Carousel item -->
              <div class="carousel-item">
              <div class="experience-slide-one row h-100 align-items-center">
                  <!-- Image -->
                  <div class="col-md-5">
                    <div class="experience-slide-img">
                      <img class="rounded img-fluid" src="./../assets/images/pillar-image-2.jpg" alt="2018 image">
                    </div>
                  </div>
                  <!-- Text -->
                  <div class="col-md-7">
                    <div class="experience-slide-text">
                      <h3>2018</h3>
                      <p>Lorem ipsum </p>
                    </div>
                  </div>
                  
                </div>
              </div>

              <!-- Carousel item -->
              <div class="carousel-item">
                <div class="experience-slide-one row h-100 align-items-center">
                  <!-- Image -->
                  <div class="col-md-5">
                    <div class="experience-slide-img">
                      <img class="rounded img-fluid" src="./../assets/images/pillar-image-3.jpg" alt="2018 image">
                    </div>
                  </div>
                  <!-- Text -->
                  <div class="col-md-7">
                    <div class="experience-slide-text">
                      <h3>2018</h3>
                      <p>Lorem ipsum </p>
                    </div>
                  </div>
                  
                </div>
              </div>

              <!-- Carousel item -->
              <div class="carousel-item">
                <div class="experience-slide-one row h-100 align-items-center">
                  <!-- Image -->
                  <div class="col-md-5">
                    <div class="experience-slide-img">
                      <img class="rounded img-fluid" src="./../assets/images/pillar-image-3.jpg" alt="2018 image">
                    </div>
                  </div>
                  <!-- Text -->
                  <div class="col-md-7">
                    <div class="experience-slide-text">
                      <h3>2018</h3>
                      <p>Lorem ipsum </p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> -->
          </div>
        </div>
      </div>

    </section>
  </main>

  <!-- Start footer -->
  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="./../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>