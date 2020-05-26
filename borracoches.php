<head>
<title>Creacion de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
<body text="#E5E5E5">
<font face="tahoma">
<font size="2">
<font link="#E5E5E5" vlink="E0E0E0">
<p aling = "center">
<h2>BORRAR VEHICULOS</h2>
<?php

$id = $_GET['id'];

include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexion*/
if (mysqli_connect_errno()){
    print("fallo la conexion: %$\n", mysqli_connect_errno());
    exit();
}
$eliminar =  mysqli_query($conexion, "
DELETE FROM ocasion
where id='$id'");

?>
<a href="http://localhost/coches/formbusqueda.html">volver
