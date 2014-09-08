<?php
session_start();
$nombform = $_SESSION["nombform"];
$pregunta =$_REQUEST["pregunta"];

$con= mysql_connect("localhost", "root") or die ("error en la conexion");
mysql_select_db("formulario")or die("error en DB");
$res=mysql_query("select cod_f from formulario where nombre='$nombform'") or die("error en tb formularios");
while($fila = mysql_fetch_assoc($res))
{
       $idform = $fila['cod_f'];
}

$res2=mysql_query("INSERT into pregunta (pregunta,cod_f,cod_tipo_preg)VALUES ('$pregunta','$idform','4')") or die("error en tb preguntas");

mysql_close($con);


?>
<head>

<script> 
function volver()
{ 
	opener.document.location.reload();
	window.close();
}

</script>
</head>
<body onLoad="volver();">
</body>











