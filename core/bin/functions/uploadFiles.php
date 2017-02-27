<?php
if (!empty($_FILES['img']['name'][0]))
{
  $uploadOk = 1;
  $files = $_FILES['img'];

  $allowed = array('jpg', 'png', 'jpeg', 'gif');
  $uploaded = array();
  $failed = array();

  $dir = "../../../img-memes/";

foreach ($files['name'] as $i => $name)
  {
    //info img
    $file_name = $files['name'][$i];
    $file_size = $files['size'][$i];
    $file_type = $files['type'][$i];
    $file_tmp = $files['tmp_name'][$i];
    $file_error = $files['error'][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    if (in_array($file_ext,$allowed))
    {
      if ($file_error === 0)
      {
        if ($file_size <= 4000000 && !file_exists($file_name))
        {
            $n_img = 'tags'.'-'.strtolower($file_name);
            $dir_img = $dir . $n_img;
            $uploadOk = 1;

            if (move_uploaded_file($file_tmp, $dir_img))
            {

              $uploaded[$i] = $dir_img;
              $uploadOk = 1;
            }

            else
            {
              $failed[$i] = "[{$file_name}] exist";
              $uploadOk = 0;
            }
        }

        else
        {
          $failed[$i] = "[{$file_name}] 'size' {$file_size}";
          $uploadOk = 0;
        }
      }

      else
      {
          $failed[$i] = "[{$file_name}] 'up' {$file_error}";
          $uploadOk = 0;
      }
    }

    else
    {
      $failed[$i] = "[{$file_name}] 'extension' {$file_ext}";
      $uploadOk = 0;
    }

    if (!empty($uploaded))
    {
      echo 'ok', '<br>'. $dir_img, '<br>';
      //echo '<pre>', print_r($files), '</prev>';
    }

    if (!empty($failed))
    {
      print_r($failed);
    }

  }

  echo count($uploaded);
}

else
{
  echo "error img fuck u";
}

 ?>

 <script type="text/javascript" src = "../../../views/app/JS/img.js"></script>

 <script type="text/javascript">

 </script>
