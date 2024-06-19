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
  <title>kies jouw richting</title>
  <style>
    .custom-margin {
      margin-bottom: 8px !important;
    }
    .progress-bar-custom {
      background-color: #90D0BA;
    }
    .btn-outline-black {
      border: 2px solid black !important;
      color: black !important;
      background-color: transparent !important;
    }
    .btn-outline-black:hover {
      background-color: black !important;
      color: white !important;
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
          <a href="index.php" class="navbar-brand"><img class="me-2" src="./assets/images/logo/edubridge-logo.svg" alt="eduBridge logo">eduBridge</a>
            <ul class="nav d-flex gap-2">
              <li class="nav-item"><a href="./roadmap.php" class="nav-link">Roadmap</a></li>
              <li class="nav-item"><a href="./simulator.php" class="nav-link">Simulator</a></li>
              <li class="nav-item"><a href="./procedures.php" class="nav-link active">Procedures</a></li>
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
    <div class="row justify-content-center">
      <div class="col-12 text-center mb-4">
        <h2>Mijn Opleidingen</h2>
        <span class="tag-line theme-purple d-block mx-auto mb-3" style="width: 50px; height: 4px; background-color: #A0A0FF;"></span>
      </div>
      <div class="col-12 col-md-8 col-lg-6 mb-4">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">Opleiding</span>
          <input type="text" class="form-control" placeholder="Zoek een opleiding" aria-label="Zoek een opleiding" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="d-flex align-items-center justify-content-between mb-2">
          <div>Burgerlijk ingenieur</div>
          <div>93%</div>
        </div>
        <div class="progress mb-3" style="height: 10px;">
          <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="course.php?name=Burgerlijk%20ingenieur&percentage=93" class="btn btn-outline-black w-100 mb-4">Meer info</a>

        <div class="d-flex align-items-center justify-content-between mb-2">
          <div>Wiskunde</div>
          <div>85%</div>
        </div>
        <div class="progress mb-3" style="height: 10px;">
          <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="course.php?name=Wiskunde&percentage=85" class="btn btn-outline-black w-100 mb-4">Meer info</a>

        <div class="d-flex align-items-center justify-content-between mb-2">
          <div>Handelswetenschappen</div>
          <div>81%</div>
        </div>
        <div class="progress mb-3" style="height: 10px;">
          <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 81%;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="course.php?name=Handelswetenschappen&percentage=81" class="btn btn-outline-black w-100 mb-4">Meer info</a>

        <div class="d-flex align-items-center justify-content-between mb-2">
          <div>TEW</div>
          <div>72%</div>
        </div>
        <div class="progress mb-3" style="height: 10px;">
          <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="course.php?name=TEW&percentage=72" class="btn btn-outline-black w-100 mb-4">Meer info</a>

        <div class="d-flex align-items-center justify-content-between mb-2">
          <div>Accounting</div>
          <div>67%</div>
        </div>
        <div class="progress mb-3" style="height: 10px;">
          <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="course.php?name=Accounting&percentage=67" class="btn btn-outline-black w-100 mb-4">Meer info</a>
      </div>
    </div>
  </main>

  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Links JS scripts -->
  <script src="./assets/js/app.js"></script>
</body>
</html>
