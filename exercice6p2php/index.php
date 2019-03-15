<?php
$age = 110;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 6 Partie 2 php</title>
</head>
<body>
  <!-- Traduire ce code avec des if et des else : -->
  <?php if ($age >= 18 AND $age <= 100) { ?>
    <p class="major">Tu es majeur</p>
  <?php }else if ($age < 18 ) { ?>
    <p class="notMajor">Tu n'es pas majeur</p>
  <?php }else{ ?>
    <p class="other">Tu es trés agé, ou menteur,...</p>
  <?php } ?>
</body>
</html>
