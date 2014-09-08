<?php
   session_start();
   if ( !isset($_SESSION["ok"]) )
      header("location: http://localhost/formulario/index.php");
   if ( isset($_REQUEST["control"]) ) {
      $estado = $_REQUEST["control"];
      if ( $estado == 1 )
	     echo "<hr>El usuario YA existe, Adicion cancelada<hr>";
	  if ( $estado == 2 )
	     echo "<hr>El usuario se agrego satisfactoriamente<hr>";
   } 
   ?>

<?php
$nombform = $_SESSION["nombform"];
$pregunta =$_REQUEST["pregunta"];

$con= mysql_connect("localhost", "root") or die ("error en la conexion");
mysql_select_db("formulario")or die("error en DB");
$res=mysql_query("select cod_f from formulario where nombre='$nombform'") or die("error en tb formularios");
while($fila = mysql_fetch_assoc($res))
{
       $idform = $fila['cod_f'];
}

$res2=mysql_query("INSERT into pregunta (pregunta,cod_f,cod_tipo_preg)VALUES ('$pregunta','$idform','1')") or die("error en tb preguntas");

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











