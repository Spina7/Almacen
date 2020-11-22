<?php
  require_once('includes/load.php');
  // Comprobar en qué nivel el usuario tiene permiso para ver esta página
   page_require_level(1);
?>
<?php
  $delete_id = delete_by_id('users',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","Usuario eliminado");
      redirect('users.php');
  } else {
      $session->msg("d","Se ha producido un error en la eliminación del usuario");
      redirect('users.php');
  }
?>
