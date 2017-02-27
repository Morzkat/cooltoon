<!-- Modal -->
<div class="modal fade" id="modal_L" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div id="_AJAX_LOGIN_"></div>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Login</h4>
</div>
<div class="modal-body">
<div role="form" onkeypress="enter(event)">

  <div class="form-group">

    <label for="login"><span class="glyphicon glyphicon-user"></span>Login</label>
    <input type="text" id="login" class="form-control" placeholder="login">

  </div>

  <div class="form-group">

    <label for="password"><span class="glyphicon glyphicon-eye-close"></span>Password</label>
    <input type="password" id="user_pass" class="form-control" placeholder="Password">

  </div>

  <div class="form-group">

    <button type="button" class="btn btn-success" onclick=goLogin()>Sign in</button>

  </div>


</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
</div>

</ul>
</div>

 <script type="text/javascript" src ="views/app/JS/login.js"></script>
