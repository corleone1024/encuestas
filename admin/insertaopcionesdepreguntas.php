
<header>
<script> 
function volver()
{ 
	opener.document.location.reload();
	window.close();
	
}

</script>

</header>
<?php
session_start();
$cont=1;
$num=$_SESSION["nroresp"];
$cod_preg=$_SESSION["cod_preg"];

while($cont<=$num)
{
		$respuesta =$_REQUEST[$cont];
		$con= mysql_connect("localhost", "root") or die ("error en la conexion");
		mysql_select_db("formulario")or die("error en DB");
		$res=mysql_query("INSERT into respuesta_multiple (respuesta,cod_preg)VALUES ('$respuesta','$cod_preg')") or die("error en tb respuesta_multiple");
		
		mysql_close($con);

	
	$cont++;

	
}	  


?>
<body onLoad="volver();">
</body>