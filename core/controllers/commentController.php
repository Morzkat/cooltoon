<?php include (HTML_DIR .'overall/header.php'); ?>

<?php
header('Cache-Control: no-cache, must-revalidate');

 ?>

</head>

<body>

    <?php include (HTML_DIR .'overall/Topnav.php') ?>

<div class="container">

<?php

$id_meme = $_POST['id_meme'];

if (!isset($_SESSION['user_id']))
 {
  include(HTML_DIR.'public/must_Login.php');
}

  $db  = new Conexion();
  $sql = "SELECT * FROM memes WHERE id_meme='$id_meme' LIMIT 1";

  $query_comments = "SELECT comments.id_comments, comments.user, comments.comment, comments.date
  FROM comments INNER JOIN memes ON comments.id_meme = memes.id_meme WHERE memes.id_meme = '$id_meme'";

  $user = $users_F[$_SESSION['user_id']]['user'];

  meme_To_Comment($sql);

echo "<p>&nbsp;</p>";

//echo $user = $users_F[$_SESSION['user_id']]['user'];

    comments_Load($query_comments);

?>
<button type="button" name="button" onclick="p()">prueba</button>
</div>

    </body>

<?php include (HTML_DIR .'overall/footer.php'); ?>

      </html>
