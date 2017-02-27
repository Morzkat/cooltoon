function goReg() {
  var xmlhttp, form, response, result, user, pass;
  user = __('reg_user').value;
  pass = __('reg_pass').value;
  pass2 = __('reg_pass2').value;
  email = __('reg_email').value;

  form = 'user=' + user + '&pass=' + pass + '&email=' + email;

  if (user != '' && pass != '' && pass2 != '' && email !='')
  {
    if (pass == pass2)
    {
      xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          if(xmlhttp.responseText == 1)
          {
            result = '<div class="alert alert-dismissible alert-success">';
            result += '<h4>Conectado!</h4>';
            result += '<p><strong>Estamos redireccionandote...</strong></p>';
            result += '</div>';
            __('_AJAX_REG_').innerHTML = result;
            location.reload();
          }
          else
          {
            __('_AJAX_REG_').innerHTML = xmlhttp.responseText;
          }

        }

        else if(xmlhttp.readyState != 4)
        {
          result = '<div class="alert alert-dismissible alert-warning">';
          result += '<button type="button" class="close" data-dismiss="alert">x</button>';
          result += '<h4>Procesando...</h4>';
          result += '<p><strong>Estamos intentando logearte....</strong></p>';
          result += '</div>';
          __('_AJAX_REG_').innerHTML = result;
        }
      }
      xmlhttp.open('POST','ajax.php?mode=reg',true);
      xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      xmlhttp.send(form);
    }

    else
    {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando....</h4>';
      result += '<p><strong>-.- Password...</strong></p>';
      result += '</div>';
      __('_AJAX_REG_').innerHTML = result;
    }
  }

  else
  {
    result = '<div class="alert alert-dismissible alert-warning">';
    result += '<button type="button" class="close" data-dismiss="alert">x</button>';
    result += '<h4>Procesando...</h4>';
    result += '<p><strong>-.- Llenos....</strong></p>';
    result += '</div>';
    __('_AJAX_REG_').innerHTML = result;
  }
}

function enter(e)
{
  if (e.keyCode == 13)
  {
      goLogin();
  }
}
