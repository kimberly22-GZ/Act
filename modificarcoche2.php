<head>
<title>Creacion de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
<body text="#E5E5E5">
<font face="tahoma">
<font size="2">
<font link="#E5E5E5" vlink="E0E0E0">
<p aling = "center">
<h2>DATOS DEL VEHICULO MODIFICADO</h2>
<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$combustible = $_POST['combustible'];
$color = $_POST['color'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];

include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexion*/
if (mysqli_connect_errno()){
    print("fallo la conexion: %$\n", mysqli_connect_errno());
    exit();
}
$insercion = mysqli_query($conexion, "
UPDATE ocasion
SET marca='$marca',
modelo= '$modelo',
combustible= '$combustible',
color= '$color' ,
fecha='$fecha' ,
precio= '$precio'
where id='$id'");

echo "A actualizado los siguientes datos";
echo "<br><br>";
echo "Marca: $marca";
echo "<br>";
echo "Modelo: $modelo";
echo "<br>";
echo "Combustible: $combustible";
echo "<br>";
echo "Color: $color";
echo "<br>";
echo "Fecha: $fecha";
echo "<br>";
echo "Precio: $precio";
echo "<br><br>";
?>

<a href="http://localhost/coches/formbusqueda.html">volver</a>