<?php

if ($_POST)
{
require 'core/core.php';
  switch (isset($_GET['mode']) ? $_GET['mode'] : null)
  {
    case 'login':
    $db = new Conexion();
    $db->query("UPDATE memes SET upvotes = 50 WHERE id = 19;");
      require ('core/bin/ajax/login_U.php');
      break;

      case 'reg':
        require ('core/bin/ajax/sing_In.php');
        break;

    default:
      header('location: index.php');
      break;
  }
}
else
{
  header('location: index.php');
}

 ?>
