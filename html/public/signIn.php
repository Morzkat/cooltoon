<!-- Modal -->
<div class="modal fade" id="modal_SU" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div id="_AJAX_REG_"></div>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Sign In</h4>
</div>
<div class="modal-body">

<div role="form" onkeypress="enter(event)">
  <div class="form-group">

    <label for="Email"><span class="glyphicon glyphicon-user"></span>Email</label>
    <input type="email" class="form-control" id="reg_email" placeholder="Email" >

  </div>
    <div class="form-group">
    <label for="Username"><span class="glyphicon glyphicon-user"></span>User</label>
    <input type="text" class="form-control" id="reg_user" placeholder="User">

  </div>

    <div class="form-group">
    <label for="Pass"><span class="glyphicon glyphicon-eye-close"></span>Password</label>
    <input type="password" class="form-control" id="reg_pass" placeholder="Password">
  </div>

    <div class="form-group">
    <label for="Pass2"><span class="glyphicon glyphicon-eye-close"></span>Repeat Password</label>
    <input type="password" class="form-control" id="reg_pass2" placeholder="Repeat Password">

  </div>

  <div class="form-group">
    <button type="button" class="btn btn-success" onclick="goReg()">Sign In</button>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>

</div>

</div>

 <script type="text/javascript" src ="views/app/JS/reg.js"></script>
