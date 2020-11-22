<?php
  require_once('includes/load.php');
  // Comprobar en qué nivel el usuario tiene permiso para ver esta página
  page_require_level(3);
?>
<?php
  $d_sale = find_by_id('sales',(int)$_GET['id']);
  if(!$d_sale){
    $session->msg("d","ID vacío.");
    redirect('sales.php');
  }
?>
<?php
  $delete_id = delete_by_id('sales',(int)$d_sale['id']);
  if($delete_id){
      $session->msg("s","Venta eliminada.");
      redirect('sales.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('sales.php');
  }
?>
