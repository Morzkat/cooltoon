<?php

function Encrypt($str)
{
  return crypt($str, '$6$rounds=5000$anexamplestringforsalt$');
}


 ?>
