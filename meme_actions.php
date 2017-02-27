<?php

if ($_POST)
{

  $id_meme = $_POST['id_meme'];
  $id_user = $_POST['id_user'];

  require 'core/core.php';

  $db = new Conexion();

  $exist = $db->query("SELECT id_user, id_meme, state FROM user_voted WHERE id_user = '$id_user' AND id_meme = '$id_meme';");

  switch (isset($_GET['action']) ? $_GET['action'] : null)
  {

    case 'plus':

    if ($db->rows($exist) == 0)
    {

      $sql_voted = $db->query("INSERT INTO user_voted (id_user, id_meme, state) VALUES ('$id_user', '$id_meme', 1)");
      $sql = $db->query("UPDATE memes SET upvotes = upvotes + 1 WHERE id_meme = '$id_meme';");

      if ($sql)
      {
        $sql1 = $db->query("SELECT upvotes FROM memes WHERE id_meme = '$id_meme' LIMIT 1");
        if ($db->rows($sql1))
        {
          while ($row = $db->fetch_A($sql1))
          {
            print_r ($row[0]);
          }
        }
      }
    }

    else
    {

      $sql_delete = $db->query("DELETE FROM user_voted WHERE id_user = '$id_user' AND id_meme = '$id_meme';");
      $sql = $db->query("UPDATE memes SET upvotes = upvotes - 1 WHERE id_meme = '$id_meme';");


      if ($sql)
      {
        $sql1 = $db->query("SELECT upvotes FROM memes WHERE id_meme = '$id_meme' LIMIT 1");
        if ($db->rows($sql1))
        {
          while ($row = $db->fetch_A($sql1))
          {
            print_r ($row[0]);
          }
        }
      }

    }
      break;

      case 'less':

      if ($db->rows($exist) == 0)
      {

        $sql_voted = $db->query("INSERT INTO user_voted (id_user, id_meme, state) VALUES ('$id_user', '$id_meme', 2)");
        $sql = $db->query("UPDATE memes SET downvotes = downvotes - 1 WHERE id_meme = '$id_meme';");

        if ($sql)
        {
          $sql1 = $db->query("SELECT downvotes FROM memes WHERE id_meme = '$id_meme' LIMIT 1");
          if ($db->rows($sql1))
          {
            while ($row = $db->fetch_A($sql1))
            {
              print_r ($row[0]);
            }
          }
        }

      }

      else
      {

        $sql_voted = $db->query("DELETE FROM user_voted WHERE id_user = '$id_user' AND id_meme ='$id_meme';");
        $sql = $db->query("UPDATE memes SET downvotes = downvotes + 1 WHERE id_meme = '$id_meme';");

        if ($sql)
        {
          $sql1 = $db->query("SELECT downvotes FROM memes WHERE id_meme = '$id_meme' LIMIT 1");
          if ($db->rows($sql1))
          {
            while ($row = $db->fetch_A($sql1))
            {
              print_r ($row[0]);
            }
          }
        }
      }

        break;
        case 'comment':
          require 'core/bin/ajax/comment.php';
          break;

    default:
      header('location: index.php');
      break;
  }

  $db->close();
}
else
{
  header('location: index.php');
}

 ?>
