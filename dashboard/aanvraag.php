<!DOCTYPE html>
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
  <title>kies jouw richting</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .navbar-brand img {
      height: 40px;
    }
    .language-switcher a {
      text-decoration: none;
      color: black;
      padding: 0 5px;
    }
    .language-switcher a.active-lang {
      font-weight: bold;
      text-decoration: underline;
    }
    .tag-line {
      width: 50px;
      height: 4px;
      background-color: #A0A0FF;
    }
    .progress-bar-custom {
      background-color: #90D0BA;
    }
    .btn-outline-black {
      border: 2px solid black;
      color: black;
      background-color: transparent;
    }
    .btn-outline-black:hover {
      background-color: black;
      color: white;
    }
    .center-content {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .circular-chart {
      display: block;
      margin: 10px auto;
      max-width: 80px;
      max-height: 80px;
    }
    .circle-bg {
      fill: none;
      stroke: #eee;
      stroke-width: 3.8;
    }
    .circle {
      fill: none;
      stroke-width: 2.8;
      stroke-linecap: round;
      stroke: #6a1b9a;
      animation: progress 1s ease-out forwards;
    }
    @keyframes progress {
      0% {
        stroke-dasharray: 0 100;
      }
    }
    .percentage {
      font-size: 0.5em;
      text-anchor: middle;
      dominant-baseline: middle;
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
          <a href="./roadmap.php" class="navbar-brand"><img class="me-2" src="./../assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="./roadmap.php" class="nav-link">Roadmap</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="./procedures.php" class="nav-link active">Procedures</a></li>
              <li class="nav-item"><a href="./infohub.php" class="nav-link">Info Hub</a></li>
              <li class="nav-item"><a href="./profile.php" class="nav-link">Profiel</a></li>
              <li class="nav-item ms-3"><a href="./login.php" class="btn theme-green">Kinderprofiel</a></li>
            </ul>
            <div class="d-flex align-items-center">
              <a href="./../includes/logout.inc.php" class="btn theme-green"><i class="bi bi-box-arrow-right me-2"></i>Afmelden</a>
            </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="container my-5">
    <div class="text-center mb-4 center-content">
      <h2>Aanvragen op één plek</h2>
      <p>Al je procedure aanvragen op één handige hub. Voeg nieuwe procedures toe en krijg inzicht in de voortgang van elke aanvraag.</p>
      <span class="tag-line d-block mx-auto mb-3"></span>
    </div>
    <div class="d-flex justify-content-center mb-4">
      <a href="./courses.php" class="btn btn-outline-info mr-2">Opleidingen</a>
    </div>
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="./../assets/images/aanvraag.png" class="card-img-top" alt="Studietoelagen">
          <div class="card-body">
            <h5 class="card-title">Studietoelagen</h5>
            <p class="card-text">Aanvraag studietoelagen voor het komende academiejaar werd ingediend</p>
            <div class="d-flex justify-content-between align-items-center">
              <span>2023 - 2024</span>
            </div>
            <div class="circular-chart">
              <svg viewBox="0 0 36 36" class="circular-chart">
                <path class="circle-bg"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"/>
                <path class="circle"
                  stroke-dasharray="30, 100"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"/>
                <text x="18" y="20.35" class="percentage">30%</text>
              </svg>
            </div>
            <a href="./info.php" class="btn btn-outline-black w-100 mt-2">Meer info</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/js/app.js"></script>
</body>
</html>
