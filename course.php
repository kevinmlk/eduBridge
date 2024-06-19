<?php
$courseName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Unknown Course';
$percentage = isset($_GET['percentage']) ? htmlspecialchars($_GET['percentage']) : 'N/A';

// Define subjects and their icons based on the course name
$subjects = [];
if ($courseName === 'Handelswetenschappen') {
    $subjects = [
        ['name' => 'Economie', 'icon' => './assets/images/dangericon.png', 'warning' => 'Let op! Je hebt mogelijk onvoldoende achtergrond in economie voor de richting Handelswetenschappen. Overweeg extra voorbereiding of bijscholing.'],
        ['name' => 'Inleiding boekhouden', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Handels verrichtingen', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Bedrijfskunde', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Mens en samenleving', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Recht', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Informatica', 'icon' => './assets/images/checkicon.png'],
    ];
} else {
    // Default subjects for other courses
    $subjects = [
        ['name' => 'wiskunde', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Fysica', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Informatica', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Chemie', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Mechanica', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Ingenieursvaardigheden', 'icon' => './assets/images/checkicon.png'],
        ['name' => 'Materiaalkunde', 'icon' => './assets/images/checkicon.png'],
    ];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Course Details</title>
  <style>
    .progress-bar-custom {
      background-color: #90D0BA;
    }
    .rounded-box {
      border: 1px solid #ccc;
      border-radius: 25px;
      padding: 30px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .subject-list {
      list-style-type: none;
      padding: 0;
    }
    .subject-list li {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
      position: relative;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }
    .subject-list li:last-child {
      border-bottom: none;
    }
    .subject-list li:hover {
      background-color: #f0f0f0;
    }
    .subject-icon {
      width: 40px;
    }
    .language-switcher {
      list-style-type: none;
      padding: 0;
    }
    .language-switcher li {
      display: inline;
      margin-right: 10px;
    }
    .language-switcher li a {
      text-decoration: none;
    }
    .language-switcher li a.active-lang {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
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

  <!-- Main content -->
  <main class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 text-center rounded-box">
        <h2><?php echo $courseName; ?></h2>
        <div class="progress my-4" style="height: 20px;">
          <div class="progress-bar progress-bar-custom" role="progressbar" style="width: <?php echo $percentage; ?>%;" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percentage; ?>%</div>
        </div>
        <h3>Vakken</h3>
        <ul class="subject-list">
          <?php foreach ($subjects as $subject): ?>
            <li <?php echo $subject['name'] === 'Economie' ? 'data-bs-toggle="modal" data-bs-target="#warningModal"' : ''; ?>>
              <?php echo $subject['name']; ?>
              <img src="<?php echo $subject['icon']; ?>" alt="Icon" class="subject-icon">
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="warningModalLabel">Waarschuwing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Let op! Je hebt mogelijk onvoldoende achtergrond in economie voor de richting Handelswetenschappen. Overweeg extra voorbereiding of bijscholing.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluiten</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include_once(__DIR__ . '/includes/footer.inc.php'); ?>

  <!-- Bootstrap JS -->
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
