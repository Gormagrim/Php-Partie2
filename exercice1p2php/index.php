<?php
// On cré un variable age et on l'initialise à 18. On ne met pas de quotes car 18 est un nombre.
  $age = 18;
  ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
  <title>Exercice 1 Partie 2 php</title>
 </head>
 <body>
   <!-- Créer une variable age et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
        Dans le cas contraire, afficher Vous êtes mineur. -->
<?php if ($age >= 18) { ?>
  <p class="old"><?php echo $age ; ?> ans, vous êtes majeur.</p>
<?php }else { ?>
  <p class="young"><?php echo $age ; ?> ans, vous êtes mineur</p>
<?php } ?>

<!-- Deuxième façon de faire: -->
<p class="young">
  <?php
    if ($age >= 18) {
      echo 'Vous êtes majeur.';
    }else {
      echo 'Vous êtes mineur.';
    }
   ?>
</p>
</body>
</html>
