<?php

function Users() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM users;");
  if($db->rows($sql) > 0) {
    while($d = $db->fetch_A($sql))
    {
      $users_F[$d['id_user']] = array(
        'id' => $d['id_user'],
        'user' => $d['user'],
        'pass' => $d['pass'],
        'email' => $d['email'],
        'level' => $d['level']
      );
    }
  }
  else
  {
    $users_F = false;
  }
  $db->free_R($sql);
  $db->close();

  return $users_F;
}

?>
