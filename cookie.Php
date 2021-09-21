<?php
setcookie("Pais-seleccionado",$_GET["pais"],time()+86400,'/');
header('Location:pagina_img.php');
?>
<?php
if(!$_COOKIE['pais-seleccionado']){
  header('Location:ubicacion.php');
}else if($_COOKIE['pais-seleccionado'] == 'cl'){
  header('Location:Colombia.php');
}else if($_COOKIE['pais-seleccionado.php'] == 'esp'){
  header('Location:Espana.php');
}else if($_COOKIE['pais-seleccionado'] == 'ch'){
  header('Location:Chile.php');
}
?>
