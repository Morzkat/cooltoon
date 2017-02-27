<?php


function comments_Load($sql)
{

  $db = new Conexion();
  $sql = $db->query($sql);

  while ($row_comments = $db->fetch_O($sql))
  {

    $post_comment[] = $row_comments;

  }
  echo '<div id="div_commented">';

  foreach ($post_comment as $key)
  {
    echo '<table id="table">
    <p>Usuario: '.$key->user.'</p>
    <p>Comentario: '.$key->comment.'</p>

    </table>';
  }

  echo '</div>';
}

function load_All_memes($sql)
{

  $db = new Conexion();
  $sql = $db->query($sql);

  while ($row = $db->fetch_O($sql))
  {
    $posts[] = $row;

  }

  foreach ($posts as $key)
  {
    echo '<table id="table"><div class = "img" text-align: center; position:relative; width: 100%; border-width: 1px 0 0 0; ">
    <td><h4>'.$key->title.'</h4>
    <img src ="'.$key->url_img.'"width="450" height="400">
    <p>&nbsp;</p>
    <button type="button" name="button" class = "button" id="voto+"', isset($_SESSION['user_id']) ? 'onclick="votesP('.$key->id_meme.', '.$_SESSION['user_id'].')"' : 'data-toggle="modal" data-target="#modal_ML"', 'style="">&nbsp;voto&nbsp;+1&nbsp;</button>&nbsp;&nbsp;</button><h5 class = "button2" id="h5U'.$key->id_meme.'">'.$key->upvotes.'</h5>

    <button type="button" name="button" class = "button" id="voto+"', isset($_SESSION['user_id']) ? 'onclick="votesL('.$key->id_meme.', '.$_SESSION['user_id'].')"' :'data-toggle="modal" data-target="#modal_ML"',  'style="">&nbsp;voto&nbsp;-1&nbsp;</button>&nbsp;&nbsp;</button><h5 class = "button2" id="h5D'.$key->id_meme.'">'.$key->downvotes.'</h5>

    <form class="" action="?view=comment" method="POST">
      <input type="hidden" name="id_meme" value="'.$key->id_meme.'">
      <input type="submit" class = "button" value="Comentar">
    </form>
    </td></div></table>';

      }
}

function meme_To_Comment($sql)
{
  $db = new Conexion();
  $sql = $db->query($sql);

  while ($row = $db->fetch_O($sql))
  {
    $post[] = $row;
  }
foreach ($post as $key)
{

    echo '<table id="table"><div class = "img" text-align: center; position:relative; width: 100%; border-width: 1px 0 0 0; ">
    <td><h4>'.$key->title.'</h4>
    <img src ="'.$key->url_img.'"width="450" height="400">
    <p>&nbsp;</p>

    <div id="_DIV_COMMENTS"></div>

    <button type="button" name="button" class="button" id="voto+"', isset($_SESSION['user_id']) ? 'onclick="votesP('.$key->id_meme.', '.$_SESSION['user_id'].')"' : 'data-toggle="modal" data-target="#modal_ML"', 'style="">&nbsp;voto&nbsp;+1&nbsp;</button>&nbsp;&nbsp;</button><h5 class = "button2" id="h5U'.$key->id_meme.'">'.$key->upvotes.'</h5>

    <button type="button" name="button" class="button" id="voto+"', isset($_SESSION['user_id']) ? 'onclick="votesL('.$key->id_meme.', '.$_SESSION['user_id'].')"' :'data-toggle="modal" data-target="#modal_ML"',  'style="">&nbsp;voto&nbsp;-1&nbsp;</button>&nbsp;&nbsp;</button><h5 class = "button2" id="h5D'.$key->id_meme.'">'.$key->downvotes.'</h5>

    <textarea name="name" id="comment" placeholder="Comenta" rows="3" cols="80" style=" resize:none;"></textarea>
    <button type="button" class="button" name="button" style = "color: red;"', isset($_SESSION['user_id']) ? 'onclick="comments('.$_SESSION['user_id'].', '.$key->id_meme.')"' : 'data-toggle="modal" data-target="#modal_ML"', '>Comentar</button>

    </td></div>  </table>';
    }

}

 ?>
