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
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td width="705" colspan="2" height="24"><table border="0" cellpadding="0" cellspacing="0" id="navigation">
      <tr>
        <td align="center" nowrap="nowrap"><a href="menu_user.php">MENU</a></td>
        <td align="center" nowrap="nowrap"><a href="lista_formulario.php">LLenar Formulario</a></td>
      </tr>
    </table></td>
	<td width="100%">&nbsp;</td>
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
	<td width="35"><a href="menu_user.php">Atras</a></td>
	<td width="710" valign="top"><br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="2" width="500">
		<tr>
		<td class="pageName">SELECIONA FORMULARIO</td>
		</tr>

		<tr>
		<td class="bodyText">
		<p><form action="editarusuario.php" method="get" >
    
   
   
    				<?php
					$con= mysql_connect("localhost", "root") or die ("error en la conexion");
					mysql_select_db("formulario")or die("error en DB");
					$res=mysql_query("select * from formulario") or die("error en tb formulario");
				
									 
									 
					$tabla = "<table border=1>\n";
					$tabla .= "<tr><td>Num</td><td>Nombre Formulario</td><td>Descripcion</td><td>Estado</td></tr>\n";
					$cont = 1;
					while($fila = mysql_fetch_assoc($res))
					{
					$nombreform=$fila['nombre'];
					$tabla .= "<tr>
					       <td>$cont</td>
					       <td><a href='responde_formulario.php?nombreform=$nombreform'>".$fila["nombre"]."</a></td>
						   <td>".$fila["des"]."</td>
						   <td>".$fila["estado"]."</td>
					      </tr>\n";
						  $cont++;
					}
					//Se cierra la tabla
					$tabla .= "</table>\n";
					 
					//Cerrar la conexión
					mysql_close($con);
					echo "<br />";
					echo $tabla;
					
					?>

    	</form><br />
		</p></td>
		</tr>
	</table>
	 <br />	</td>
	<td>&nbsp;</td>
	</tr>

	<tr>
	<td width="15">&nbsp;<br />
	&nbsp;<br />	</td>
    <td width="35">&nbsp;</td>
    <td width="710">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>

