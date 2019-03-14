<?php
  $gender = 'cheval';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 4 Partie 2 php</title>
 </head>
 <body>
   <!-- Traduire ce code avec des if et des else : -->
<?php
if ($gender == 'femme')
{?>
  <p>C'est une développeuse !!!</p>
<?php
}
else if ($gender == 'homme')
{?>
  <p>C'est un développeur !!!</p>
<?php
}
else
{?>
  <p>Merci d'entrer un genre correct !</p>
<?php
}
?>
</body>
</html>
