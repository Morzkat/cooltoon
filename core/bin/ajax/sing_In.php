<?php

$db = new Conexion();

$user = $db->real_escape_string($_POST['user']);
$pass = Encrypt($_POST['pass']);
$email = $db->real_escape_string($_POST['email']);

$sql = $db->query("SELECT user FROM users WHERE user = '$user' or email = '$email' LIMIT 1");

if ($db->rows($sql) == 0)
{
  $sql = $db->query("INSERT INTO users (user, pass, email) values ('$user','$pass','$email')");

  $d  = '<div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <h4>Procesando...</h4>
        <p><strong>-.- Bien....</strong></p>
        </div>';

          echo $d;
          $d = 1;
}
else
{
  $userV = $db->fetch_A($sql)[0];
  if (strtolower($userV) == strtolower($user))
  {
    $d  = '<div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <h4>Procesando...</h4>
            <p><strong>-.- users iguales....</strong></p>
            </div>';

            echo $d;
  }

  else
  {
    $d  = '<div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <h4>Procesando...</h4>
            <p><strong>-.- email iguales....</strong></p>
            </div>';

            echo $d;
  }
}

$db->close();

?>
