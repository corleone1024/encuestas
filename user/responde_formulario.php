
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Texto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_training.css" type="text/css" />
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="15" nowrap="nowrap"><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="2" class="logo" nowrap="nowrap">Sistemas <span class="tagline">| Tu lo imaginas nosotros lo creamos</span></td>
	<td width="44">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td colspan="2" height="24"><table border="0" cellpadding="0" cellspacing="0" id="navigation">
      <tr>
        <td align="center" nowrap="nowrap"><a href="menu_user.php;">MENU</a></td>
        <td align="center" nowrap="nowrap"><a href="lista_formulario1.php">LLenar Formulario</a></td>
      </tr>
    </table></td>
	<td width="44">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td width="15" valign="top">&nbsp;</td>
	<td width="28"><a href="lista_formulario.php">atras</a></td>
	<td width="702" valign="top"><br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="2" width="679">
		<tr>
		<td width="675" class="pageName">RESPONDE FORMULARIO</td>
		</tr>

		<tr>
		<td class="bodyText">
		<p>
		  <form action="llena_formulario.php" method="get" >
    
   
   
    				<?php
					if(isset($_REQUEST['nombreform']))
					{
						$nombform=$_REQUEST['nombreform'];
					}
					else
					echo "no hay variable";
								
					$con= mysql_connect("localhost", "root") or die ("error en la conexion");
					mysql_select_db("formulario")or die("error en DB");
					$res=mysql_query("select * from formulario where nombre = '$nombform'") or die("error en tb formulario");
						
					while($fila = mysql_fetch_assoc($res))
					{
						$idform= $fila['cod_f'];


					}				
				
					$tabla = "<table border=0>\n";
					$tabla .= "<tr><td>Num</td><td>pregunta </td><td>Respuesta</td></tr>\n";
					$cont = 1;
					$res2=mysql_query("select * from pregunta where cod_f = '$idform'") or die("error en tb pregutna");
					$textfield=1;
					$textfield2=10001;
					while($fila = mysql_fetch_assoc($res2))
					{
						$idpreg=$fila['cod_preg'];
  		     			$codpreg=$fila['cod_tipo_preg'];
						$nombreform=$fila['pregunta'];
					
						
						if($codpreg==1)
						{
						$tabla .= "<tr>
					       <td>$cont</td>
					       <td>".$fila["pregunta"]."</td>
						   <td><input type='text' name='$textfield' id='textfield'></td>
					       <td><input type='text' name='$textfield2' id='textfield' value='$fila[cod_preg]' hidden></td>
						  	</tr>\n";
						}
						if($codpreg==2)
						{
						$tabla .= "<tr>
					       <td>$cont</td>
					       <td>".$fila["pregunta"]."</td>
						   <td><input type='text' name='$textfield' id='textfield'></td>
					       <td><input type='text' name='$textfield2' id='textfield' value='$fila[cod_preg]' hidden></td>
						  	</tr>\n";
						}
						if($codpreg==3)
						{
							$res3=mysql_query("select * from respuesta_multiple where cod_preg='$idpreg'") or die("error en tb pregunta");
							$combobit="";
							while ($fil = mysql_fetch_assoc($res3)) 
							{

								$combobit .=" <option value='".$fil['respuesta']."'>".$fil['respuesta']."</option>";
							}
						
						
						$tabla .= "<tr>
					       <td>$cont</td>
					       <td>".$fila["pregunta"]."</td>
						   <td><select name='$textfield'>
							
									  echo $combobit;
							
							</select>
							</td>
					       <td><input type='text' name='$textfield2' id='textfield' value='$fila[cod_preg]' hidden></td>
						  	</tr>\n";
						}
						if($codpreg==4)
						{
						$tabla .= "<tr>
					       <td>$cont</td>
					       <td>".$fila["pregunta"]."</td>
						   <td><textarea name='$textfield' id='$textfield' cols='45' rows='5'></textarea></td>
					       <td><input type='text' name='$textfield2' id='textfield' value='$fila[cod_preg]' hidden></td>
						  	</tr>\n";
						}
						
						
						
						
						
						  $cont++;
						  $textfield++;
						   $textfield2++;
					}
					//Se cierra la tabla
					$tabla .= "</table>\n";
					 
					//Cerrar la conexión
					mysql_close($con);
					echo "<br />";
					echo "FORMULARIO $nombform";
					echo "<p>";
					echo $tabla;
					
					?>
                    
		<input name="button" type="submit" value="Guardar Respuestas" />

		<input name="numpreg" type="text" value="<?php echo $cont-1; ?>"  hidden/>
    	</form>&nbsp;</p></td>
		</tr>
	</table>
	 <br />	</td>
	<td>&nbsp;</td>
	</tr>

	<tr>
	<td width="15">&nbsp;<br />
	&nbsp;<br />	</td>
    <td width="28">&nbsp;</td>
    <td width="702">&nbsp;</td>
	<td width="44">&nbsp;</td>
  </tr>
</table>
</body>
</html>

