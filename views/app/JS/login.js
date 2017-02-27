function goLogin() {
  var xmlhttp, form, response, result, user, pass;
  user = __('login').value;
  pass = __('user_pass').value;
  form = 'user=' + user + '&pass=' + pass;
  xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      if(xmlhttp.responseText == 1)
      {
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<h4>Conectado!</h4>';
        result += '<p><strong>Estamos redireccionandote...</strong></p>';
        result += '</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
        location.reload();
      }
      else
      {
        __('_AJAX_LOGIN_').innerHTML = xmlhttp.responseText;
      }

    }

    else if(xmlhttp.readyState != 4)
    {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando...</h4>';
      result += '<p><strong>Estamos intentando logearte....</strong></p>';
      result += '</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  xmlhttp.open('POST','ajax.php?mode=login',true);
  xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  xmlhttp.send(form);
}

function enter(e)
{
  if (e.keyCode == 13)
  {
      goLogin();
  }
}
