function __(id)
{
    return document.getElementById(id);
}

function votesP(id_meme, id_user)

{

 var data = 'id_meme=' + id_meme + '&id_user=' + id_user;

    $.ajax({
      url: 'meme_actions.php?action=plus',
      type: 'POST',
      data: data
    })
    .done(function(update)
    {

      $('#h5U' + id_meme).text(update);

    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
}

function votesL(id_meme, id_user)

{

var data = 'id_meme=' + id_meme + '&id_user=' + id_user;

  $.ajax({
     url: 'meme_actions.php?action=less',
     type: 'POST',
     data: data
   })
   .done(function(update)
   {

     $('#h5D' + id_meme).text(update);
     console.log(update);
   })
   .fail(function() {
     console.log("error");
   })
   .always(function() {
     console.log("complete");
   });
}

function comments(id_user, id_meme)
{
    var commented = __('comment').value;
    var data = 'id_user=' + id_user + '&id_meme=' + id_meme + '&commented=' + commented;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function ()
    {
      if (xmlhttp.status == 200 && xmlhttp.readyState == 4)
      {

        if(xmlhttp.responseText == 1)
          {
            result = '<p class="alert alert-dismissible alert-success" >Se publico!!!!</p>';
            __('_DIV_COMMENTS').innerHTML = result;

          }
          else
          {
            __('_DIV_COMMENTS').innerHTML = xmlhttp.responseText;
          }

      }

    }
    xmlhttp.open('POST','meme_actions.php?action=comment',true);
    xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xmlhttp.send(data);
}

function p()
{
    $('#div_commented').load('core/models/functions_load.php');
    alert();
}
