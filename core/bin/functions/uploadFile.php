
<?php
require_once '../../models/conexion.php';
$db = new Conexion();
$target_dir = "../../../img-memes/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        echo "OK .";
        $uploadOk = 1;
    } else {
        echo "isn't an image.";
        $uploadOk = 0;

    }
}
// Check if file already exists
if (file_exists($target_file))
{
    echo "exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img"]["size"] > 500000 * 5)
{
    echo "is too large.";
    $uploadOk = 0;

}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "PNG" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )

{
    echo " allowed.";
    $uploadOk = 0;

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)

{
    echo "wasn't uploaded.";
// if everything is ok, try to upload file

}

else

{
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
    {
        echo "has been uploaded.";

        $n_url  = "img-memes/". $_FILES['img']['name'];

         $db->query("INSERT INTO memes (url_img) values ('$n_url')");
    }

    else

    {
        echo "fuck ur your file.";

    }

  }

  ?>

  <script type="text/javascript">
    window.location.replace('http://cooltoon.ga/index.php');
  </script>
