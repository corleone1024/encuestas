<?php
session_start();
$nombform = $_SESSION["nombform"];
$pregunta =$_REQUEST["pregunta"];
$nroresp =  $_REQUEST["cbonropreg"];
$_SESSION["nroresp"]=$nroresp;


$con= mysql_connect("localhost", "root") or die ("error en la conexion");
mysql_select_db("formulario")or die("error en DB");
$res=mysql_query("select cod_f from formulario where nombre='$nombform'") or die("error en tb formularios");
while($fila = mysql_fetch_assoc($res))
{
       $idform = $fila['cod_f'];
}

$res2=mysql_query("INSERT into pregunta (pregunta,cod_f,cod_tipo_preg)VALUES ('$pregunta','$idform','3')") or die("error en tb preguntas");

$res3=mysql_query("select cod_preg from pregunta where pregunta='$pregunta'") or die("error en tb formularios");
while($fila = mysql_fetch_assoc($res3))
{
       $cod_preg = $fila['cod_preg'];
}
$_SESSION["cod_preg"]=$cod_preg;

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
<body onLoad="">
<form name="form4"action="insertaopcionesdepreguntas.php" method="get" >
    
   
   
    				<?php
					
					$tabla = "<table border=0>\n";
					$tabla .= "<tr><td>Nro</td><td>opcion de respuesta</td></tr>\n";
					$cont=1;
					$textfield=1;
					while($cont<=$nroresp)
					{
 						   $tabla .= "<tr>
		 			       <td>$cont</td>
		 			       <td><input type='text' name='$textfield' id='textfield'/></td>
		   			       </tr>\n";
						
						  $cont++;
						  $textfield++;
					}
					//Se cierra la tabla
					$tabla .= "</table>\n";

					echo "<br />";
					echo $tabla;
					
					?>

    	            <label>
					<input type="submit" value="Guardar" />
    	            </label>
</form>

</body>
