  <nav class="navbar navbar-inverse">

<div class="container">
  <div class="navbar-header">
    <a class="navbar-brand" href="?view=index">CoolToon</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="lii"><a href="?view=index">Inicio</a></li>
    <li class="dropdown" id="lii"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Page 1-1</a></li>
        <li><a href="#">Page 1-2</a></li>
        <li><a href="#">Page 1-3</a></li>
      </ul>
    </li>
    <li class="lii"><a href="#">Page 2</a></li>
  </ul>

  <ul class="nav navbar-nav navbar-right">



    <?php
    if (!isset($_SESSION['user_id']))

    {
      echo '<li class="mbr-navbar_item" data-toggle="modal" data-target="#modal_SU"><a class="mbr-buttons_link">
        Sign Up</a></li>

        <li class="mbr-navbar_item" data-toggle="modal" data-target="#modal_L"><a class="mbr-buttons_link">
        Login</a></li>';
    }

    else
    {
        if ($users_F[$_SESSION['user_id']]['level'] == 0)
        {
          echo '<li class="mbr-navbar_item"><a href="?view=perfil" class="mbr-buttons_link">
          '.$users_F[$_SESSION['user_id']]['user'].'</a></li>;

            <li class="mbr-navbar_item"><a href="?view=close" class="mbr-buttons_link"> Desconectar
              </a></li>';
        }

        else if ($users_F[$_SESSION['user_id']]['level'] == 1)
        {
          echo '<li class="mbr-navbar_item"><a href="?view=perfil" class="mbr-buttons_link">
          '.$users_F[$_SESSION['user_id']]['user'].' =1</a></li>;

            <li class="mbr-navbar_item"><a href="?view=close" class="mbr-buttons_link"> Desconectar
              </a></li>';
        }
        elseif ($users_F[$_SESSION['user_id']]['level'] == 2)
        {
          echo '<li class="mbr-navbar_item"><a href="?view=perfil" class="mbr-buttons_link">
          '.$users_F[$_SESSION['user_id']]['user'].' =2</a></li>;

          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#imgToUpload">subir img</button>

            <li class="mbr-navbar_item"><a href="?view=close" class="mbr-buttons_link"> Desconectar
              </a></li>';
        }
    }
      ?>

        <?php

if (!isset($_SESSION['user_id']))
{
  include(HTML_DIR.'public/signIn.php');
  include(HTML_DIR.'public/login.php');
}

else
{
  include(HTML_DIR.'public/imgUpload.php');
}
        ?>

        </nav>
