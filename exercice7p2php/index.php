<?php
$isOk = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 7 Partie 2 php</title>
</head>
<body>
  <!-- Traduire ce code avec des if et des else : -->
  <?php if ($isOk == false) { ?>
    <p class="notGood">C'est pas bon !</p>
  <?php } else if ($isOk == true) { ?>
    <p class="good">C'est ok !!</p>
  <?php } ?>
</body>
</html>
