<?php
  $age = 110;
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
if ($age >= 18 && $age <= 100)
{?>
  <p>Tu es majeur</p>
<?php
}
else if ($age < 18)
{?>
  <p>Tu n'es pas majeur</p>
<?php
}
else if ($age > 100)
{?>
  <p>Tu es trés agé, ou menteur,...</p>
<?php
}
?>
</body>
</html>
