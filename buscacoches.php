<head>
<title>Creacion de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
<body text="#E5E5E5">
<font face="tahoma">
<font size="2">
<font link="#E5E5E5" vlink="E0E0E0">
<p aling = "center">
<h2>RESULTADOS DE LA BUSQUEDA</h2>
<?php

$fecha = $_POST['fecha'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];

include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexion*/
if (mysqli_connect_errno()){
    print("fallo la conexion: %$\n", mysqli_connect_errno());
    exit();
}

$buscar = mysqli_query($conexion, "SELECT * FROM ocasion
WHERE marca LIKE'$marca' or
modelo LIKE'$modelo' or
fecha LIKE'$fecha' or
precio LIKE'$precio'" );

while($row = mysqli_fetch_array($buscar))

{
    $idb = $row["id"];
    $marcab = $row["marca"];
    $modelob = $row["modelo"];
    $combustibleb = $row["combustible"];
    $colorb = $row["color"];
    $preciob = $row["precio"];
    $fechab = $row["fecha"];

    echo("<table width='100%' border='0' cellspacing='0' cellpadding='0'> \n");
    echo("<tr>\n");
    echo("<td width='12%'><a href=modificarcoche.php?id=$idb>Modificar</a></td>\n");
    echo("<td width='12%'><a href=borrarcoches.php?id=$idb>Borrar</a></td>\n");
    echo("<td width='26%'>$marcab</a></td>\n");
    echo("<td width='26%'>$modelob</a></td>\n");
    echo("<td width='26%'>$fechab</a></td>\n");
    echo("</tr>\n");
    echo("</table>\n");
    echo "<hr size=2 color=ffffff width=100% aling=left>";

}
?>
<a href="http://localhost/coches/formbusqueda.html">volver

