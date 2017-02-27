
<!-- Modal -->
<div class="modal fade" id="imgToUpload" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Subir IMG</h4>
</div>

<div class="modal-body">

<form action="core/bin/functions/uploadFile.php" method="post" enctype="multipart/form-data">
  <div class="form-group">

    <p>something</p>

    
    <input type="file" name="img" id="img" accept="image/*">
    <input type="submit" value="Upload Image" name="submit">

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</form>

</div>

</div>

</div>
