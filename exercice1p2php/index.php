<?php
  $age = 17;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 1 Partie 2 php</title>
 </head>
 <body>
   <!-- Créer une variable age et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
        Dans le cas contraire, afficher Vous êtes mineur. -->
<?php
if ($age >= 18)
{
?>
  <p><?php echo $age ?> ans, vous êtes majeur.</p>
<?php
}
else
{
?>
  <p><?php echo $age ?> ans, vous êtes mineur</p>
<?php
}
?>
</body>
</html>
