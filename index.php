<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P4ex7</title>
  </head>
  <body>
    <p>
  <?php
function identity($gender,$age){
if($gender == 'men' && $age >= 18){
return 'Vous êtes un homme et vous êtes majeur';
}elseif($gender == 'men' && $age < 18){
return 'Vous êtes un homme et vous êtes mineur';
}elseif($gender == 'women' && $age >=18){
return'Vous êtes une femme et vous êtes majeur';
}elseif($gender == 'women' && $age < 18){
return 'Vous êtes une femme et vous êtes mineur';
}
}
  echo identity('women',25);
?>

   </p>
  </body>
