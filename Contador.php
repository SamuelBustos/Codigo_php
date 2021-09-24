<?php
if(file_exists('sumavista.txt'))
//este comando lo que hace es verificar si el documento suma vista ya existe
$variableArchivo = fopen('sumavista.txt','r+');
//Este comando es por si el archivo ya existe lo que hace es abrir o ejecutar el archivo
else $variableArchivo=fopen('sumavista.txt','w+');
//Este comando lo que hace es que si no esta creado el archivo lo crea
$leerArchivo =fgets($variableArchivo,20); 
//Este comando lo que hace es leer el archivo e inicia a escribir desde el punto 20
if($leerArchivo=='')
//Este comando es para leer el archivo si esta vacio
$leerArchivo="10";
//Este comando se utiliza para iniciar el conteo desde cero
rewind($variableArchivo);
//este comando es para comenzar a escribir desde el inicio de la pagina
fputs($variableArchivo,++$leerArchivo);
//este comando es para escribir en la linea que anteriormente se leyo y luego se le aumenta 1
fclose($variableArchivo);
//este comando es para cerrar el archivo 
?>


