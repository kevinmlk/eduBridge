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
    .card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      padding: 20px;
      margin-top: 20px;
    }
    .card h5 {
      margin-bottom: 20px;
    }
    .progress {
      height: 10px;
      background-color: #e0e0e0;
    }
    .progress-bar {
      background-color: #93d0ba;
    }
    .info-header {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
    }
    .info-header small {
      color: #666;
    }
    .phase-list {
      padding-left: 0;
    }
    .phase-list li {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #e0e0e0;
    }
    .phase-list li:last-child {
      border-bottom: none;
    }
    .check-icon {
      display: flex;
      align-items: center;
    }
    .check-icon img {
      margin-left: 10px;
      width: 40px;
    }
    .align-horizontal {
      display: flex;
      align-items: center;
    }
    .align-horizontal p {
      margin-right: 10px;
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
          <a href="./roadmap.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="./roadmap.php" class="nav-link">Roadmap</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="./aanvraag.php" class="nav-link active">Procedures</a></li>
              <li class="nav-item"><a href="./infohub.php" class="nav-link">Info Hub</a></li>
              <li class="nav-item"><a href="./profile.php" class="nav-link">Profiel</a></li>
              <li class="nav-item ms-3"><a href="./login.php" class="btn theme-green">Kinderprofiel</a></li>
            </ul>
            <div class="d-flex align-items-center">
              <a href="./logout.php" class="btn theme-green"><i class="bi bi-box-arrow-right me-2"></i>Afmelden</a>
            </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start main -->
  <main class="container my-5">
    <div class="text-center mb-4 center-content">
      <h2>Studietoelagen procedure</h2>
      <p>Al je procedure aanvragen op één handige hub. Voeg nieuwe procedures toe en krijg inzicht in de voortgang van elke aanvraag.</p>
      <span class="tag-line d-block mx-auto mb-3"></span>
    </div>
    <div class="row justify-content-between">
      <div class="col-lg-8">
        <div class="card">
          <div class="info-header">
            <h5>Studietoelagen</h5>
            <small>verbonden op 18-03-2024 12:33:56</small>
          </div>
          <p>U heeft een aanvraag ingediend om na te gaan of dat u recht heeft op een studietoelagen voor hoger onderwijs 2023 - 2024.</p>
          <ul class="list-unstyled phase-list">
            <li>
              <span>Vorige fase:</span>
              <span class="check-icon">Invullen startgegevens <img src="./../assets/images/checkicon.png" alt="Check Icon"></span>
            </li>
            <li>
              <span>Huidige fase:</span>
              <span>Verzamelen van gegevens</span>
            </li>
            <li>
              <span>Volgende fase:</span>
              <span>Bijvullen van de nodige documenten</span>
            </li>
          </ul>
          <div class="progress mb-2">
            <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="mb-0 text-right">30%</p>
        </div>
      </div>
      <div class="col-lg-3 align-horizontal">
        <p>Bezoek de website van studietoelagen voor een meer gedetailleerder overzicht te raadplegen over je aanvraagprocedure.</p>
        <a href="#" class="btn btn-outline-black">Ga naar studietoelagen</a>
      </div>
    </div>
    <div class="text-left mt-3">
      <a href="#" class="btn btn-link">&larr; Terug naar overzicht</a>
    </div>
  </main>

  <?php include_once(__DIR__ . '/../includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./../assets/js/app.js"></script>
</body>
</html>
