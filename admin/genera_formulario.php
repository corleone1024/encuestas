<?php
   session_start();
   if ( !isset($_SESSION["ok"]) )
      header("location: login.php");
   if ( isset($_REQUEST["control"]) ) {
      $estado = $_REQUEST["control"];
      if ( $estado == 1 )
	     echo "<hr>El usuario YA existe, Adicion cancelada<hr>";
	  if ( $estado == 2 )
	     echo "<hr>El usuario se agrego satisfactoriamente<hr>";
   } 
   ?>
   
   
   <?php
   if ( isset($_REQUEST["nombreform"]) )
   {
      $nombreform = $_REQUEST["nombreform"];
	  $_SESSION["nombform"]=$nombreform;
   }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Página principal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_training.css" type="text/css" />
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="15" nowrap="nowrap"><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="3" class="logo" nowrap="nowrap">Sistemas <span class="tagline">| Tu lo imaginas nosotros lo creamos</span></td>
	<td width="40">&nbsp;</td>
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td width="705" colspan="3" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td width="58" align="center" nowrap="nowrap" class="navText"><a href="menu_admin.php">INICIO</a></td>
          <td width="167" align="center" nowrap="nowrap" class="navText"><a href="usuarios.php">USUARIOS</a></td>
          <td width="193" align="center" nowrap="nowrap" class="navText"><a href="formularios.php">CREAR FORMULARIOS</a></td>
          <td width="189" align="center" nowrap="nowrap" class="navText"><a href="reportes.php">REPORTES</a></td>
          <td width="247" align="center" nowrap="nowrap" class="navText"><a href="informacion.php">INFORMACION</a></td>
        </tr>
      </table>	</td>
	<td width="40">&nbsp;</td>
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td width="230" colspan="2" valign="top" bgcolor="#26354A"><form id="form1" name="form1" method="post" action="">
	    <label>
	    <input type="image" width="255" height="286" name="sist" id="sist" src="../imagenes/logo-sistemas.jpg" />
	    </label>
      </form>
	  <br />
	<table border="0" cellspacing="0" cellpadding="0" width="230">
		<tr>
		<td width="230" class="sidebarText" id="padding"><br />		</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="440" valign="top"><br />
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="440">
		<tr>
		<td class="pageName"><p align="center">Generar Preguntas</p></td>
		</tr>

		<tr>
		<td class="bodyText"><p>
        
        <form name="fomr1" action="" method="get">


<table width="692" height="58" border="1">
  <tr>
    <td width="204" align="center"><label>
      <input type="button" value="Pregunta simple" onClick="javascript:window.open('crearpreguntaabierta.php','','width=600,height=400,left=50,top=50,toolbar=yes');" />    </label></td>
      <td width="228" align="center"><label>
        <input type="button" value="varias opciones" onClick="javascript:window.open('crearpreguntamultiple.php','','width=600,height=600,left=50,top=50,toolbar=YES');" />    </label></td>
      <td width="238" align="center"><label>
      <input type="button" value="Pregunta tipo resumen" onClick="javascript:window.open('crearpreguntatextolibre.php','','width=600,height=400,left=50,top=50,toolbar=yes');" />    </label></td>
    </tr>
</table>
</form>


    	<form name="form2"action="" method="get" >
    
   
   
    				<?php
					   if ( isset($_REQUEST["nombreform"]) )
					   {
				      $nombreform1 = $_REQUEST["nombreform"];
					   }
					

					$con= mysql_connect("localhost", "root") or die ("error en la conexion");
					mysql_select_db("formulario")or die("error en DB");
					$res1=mysql_query("select cod_f from formulario where nombre='$nombreform1'") or die("error en tb formularios");
					while($fila = mysql_fetch_assoc($res1))
					{
						   $idform = $fila['cod_f'];
					}

					////////////
					$con= mysql_connect("localhost", "root") or die ("error en la conexion");
					mysql_select_db("formulario")or die("error en DB");
					$res=mysql_query("select * from pregunta where cod_f='$idform'") or die("error en tb pregunta");

				
									 
									 
					$tabla = "<table border=0>\n";
					$tabla .= "<tr><td>Nro</td><td>Preguta</td><td>Respuesta</td></tr>\n";
					$cont=1;
					$textfield=1;
					while($fila = mysql_fetch_assoc($res))
					{
						$idpreg=$fila['cod_preg'];
						$codpreg=$fila['cod_tipo_preg'];
						if($codpreg==1)
						{
						   $tabla .= "<tr>
		 			       <td>$cont</td>
		 			       <td>".$fila["pregunta"]."</td>
						   <td><input type='text' name='$textfield' id='textfield' readonly/></td>
		   			       </tr>\n";
								
						}
						if($codpreg==2)
						{
						   $tabla .= "<tr>
		 			       <td>$cont</td>
		 			       <td>".$fila["pregunta"]."</td>
		 				   <td>SI
							<label>
							<input type='radio' name='radio' id='radio' value='radio' /> 
							NO    </label>
							<label>
							<input type='radio' name='radio' id='radio' value='radio' />
							</label></td>
		   			       </tr>\n";
								
						}
						if($codpreg==3)
						{	
							$res3=mysql_query("select * from respuesta_multiple where cod_preg='$idpreg'") or die("error en tb pregunta");
							$combobit="";
							while ($fil = mysql_fetch_assoc($res3)) 
							{

								$combobit .=" <option value='".$fil['cod_multiple']."'>".$fil['respuesta']."</option>";
							}
    					   
						   $tabla .= "<tr>
		 			       <td>$cont</td>
		 			       <td>".$fila["pregunta"]."</td>
						   <td>
						 	<select name='mi_select'>
							
									  echo $combobit;
							
							</select>
						   
						   </td>
		   			       </tr>\n";
								
						}
						if($codpreg==4)
						{
						   $tabla .= "<tr>
		 			       <td>$cont</td>
		 			       <td>".$fila["pregunta"]."</td>
		 				   <td><textarea name='textarea' id='textarea' cols='45' rows='5'></textarea></td>
		   			       </tr>\n";
								
						}

						  $cont++;
						  $textfield++;
					}
					//Se cierra la tabla
					$tabla .= "</table>\n";
					 
					//Cerrar la conexión
					mysql_close($con);
					echo "<br />";
					echo $tabla;
					
					?>

    	            <label>
					<input type="button" value="Finalizar" onClick="javascript: location.href='formularios.php';" />
    	            </label>
</form>

        
        
        </p>		  </td>
		</tr>
	</table>
	 <br />
	&nbsp;<br />
	<label></label></td>
	<td width="40">&nbsp;</td>
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr>
	<td width="15">&nbsp;</td>
	<td width="215">&nbsp;</td>
	<td width="50">&nbsp;</td>
	<td width="440">&nbsp;</td>
	<td width="40">&nbsp;</td>
	<td width="100%">&nbsp;</td>
	</tr>
</table>
</body>
</html>
