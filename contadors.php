<html>
<head>
<meta charset="utf-8">
	<title>Contador de visitas</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
  <style>
  	span{
  		width: 100%;
  		padding: 15px 25px;
  		border-radius: 5px;
  		font-weight: 900;
  		font-size: 60px;
  		text-align: center;
  		color: #fff;
  		background-color: #ff6a00;
  	}
      h3{
          font-size: 35px;
          font-weight: 900;
          color: #ffa900;
          margin-top: 150px;
      }
  </style>
<body>
<div class="container mt-7">
<br><br>
<br><br>

<h3 class="text-center">
	Contador de vistas 
</h3>
<hr>

<?php
if (file_exists('sumaVista.txt'))
  //Este comando lo que hace es verificar si el archivo ya esta creado
$variableArchivo = fopen('sumaVista.txt','r+');
 //Este comando lo que hace es que si el archivo uya esta creado lo abre
else $variableArchivo = fopen('sumaVista.txt','w+'); 
//Este comando lo que hace es que si el archivo no esta creado lo crea
$leerArchivo = fgets($variableArchivo,20);  
//Este comando sirve para leer los archivos
if ($leerArchivo == '')  
//Este comando sirve para leer si el archivo esta vacio 
$leerArchivo = "10";  
//Este comando sirve para iniciar el conteo desde 0
rewind($variableArchivo); 
 //este comando sirve para ir al inicio del archivo
fputs($variableArchivo,++$leerArchivo);  
//Esta linea de codigo es para ir al inicio del archivo empezar a escribir e irle sumando 1

fclose($variableArchivo);  
//este comando se utiliza para cerrar el archivo

?>


 <div class="row text-center">
    <div class="col-12 col-md-12">
    	<span>
			<?php echo $leerArchivo; ?>
		</span>
    </div>
  </div>


</div>


</body>
</html>
