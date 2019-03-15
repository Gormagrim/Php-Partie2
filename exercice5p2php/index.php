<?php
$gender = 'cheval';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 5 Partie 2 php</title>
</head>
<body>
  <!-- Traduire ce code avec des if et des else : -->
  <?php if ($gender == 'femme') { ?>
  <p class="woman">C'est une développeuse !!!</p>
  <?php }else if ($gender == 'homme') { ?>
  <p class="man">C'est un développeur !!!</p>
  <?php }else{ ?>
  <p class="other">Merci d'entrer un genre correct !</p>
  <?php } ?>
</body>
</html>
