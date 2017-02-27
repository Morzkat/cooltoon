<?php include (HTML_DIR .'overall/header.php'); ?>

</head>


<body>

    <?php include (HTML_DIR .'overall/Topnav.php') ?>

<div class="container">

<?php

if (!isset($_SESSION['user_id']))
  {
  include(HTML_DIR.'public/must_Login.php');
  }

$sql = "SELECT * FROM memes ORDER BY id_meme DESC";

load_All_memes($sql);

?>

</div>

    </body>

<?php include (HTML_DIR .'overall/footer.php'); ?>
      </html>
