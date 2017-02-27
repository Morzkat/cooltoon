<?php

$id_user = $_SESSION['user_id'];
$user = $users_F[$_SESSION['user_id']]['user'];

$id_meme = $_POST['id_meme'];
$commented = $_POST['commented'];

if (!empty($commented) )
{
  $db = new Conexion();
  $sql = $db->query("INSERT INTO comments (id_user, user, id_meme, comment) VALUES ('$id_user', '$user', '$id_meme','$commented');");
echo 1;
}

else
{
  echo '<p class="alert alert-dismissible alert-danger" >Debes comentar algo!!!!</p>';
}


 ?>
