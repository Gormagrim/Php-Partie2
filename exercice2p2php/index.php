<?php
  $isEasy = false;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
  <title>Exercice 2 Partie 2 php</title>
 </head>
 <body>
   <!-- Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes. -->
<?php if ($isEasy == true) { ?>
  <p class="easy">C'est facile!!</p>
<?php }else{ ?>
  <p class="hard">C'est difficile !!!</p>
<?php } ?>

<!-- Seconde façon de faire. -->
<?php
switch ($isEasy) // on indique sur quelle variable on travaille
{
  case true: // dans le cas où $isEasy vaut true.
?>
       <p class="easy">C'est facile!!</p>
<?php
   break;
   case false: // dans le cas où $isEasy vaut false.
?>
       <p class="hard">C'est difficile !!!</p>
<?php
   break;
}
?>

</body>
</html>
