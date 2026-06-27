<?php
require_once __DIR__ . '/src/AccessValidator.php';

$validator = new AccessValidator();
$isValid = $validator->isValid([
  'pws' => $_POST['pws'] ?? '',
  'srt' => $_POST['srt'] ?? '',
  'fName' => $_POST['fName'] ?? '',
]);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pass Accept</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('img/background.jfif'); background-size: cover; min-height: 100vh;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="p-4 shadow rounded" style="background-color: rgba(255,255,255,0.92);">
          <?php if ($isValid): ?>
            <h1 class="h4 mb-3">Dziękujemy, <?php echo htmlspecialchars($fName, ENT_QUOTES, 'UTF-8'); ?>!</h1>
            <p class="mb-0">Weryfikacja danych zakończyła się sukcesem.</p>
          <?php else: ?>
            <h1 class="h4 mb-3">Błąd walidacji</h1>
            <p class="mb-0">Wprowadzone dane są nieprawidłowe.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>