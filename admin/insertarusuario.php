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
$nombre =$_REQUEST["txtnombre"];
$paterno =$_REQUEST["txtpaterno"];
$materno =$_REQUEST["txtmaterno"];
$login =$_REQUEST["txtlogin"];
$pass =$_REQUEST["txtpass"];
$nivel =$_REQUEST["cbonivel"];
$fono =$_REQUEST["txttelefono"];
$email =$_REQUEST["txtemail"];
$img =$_REQUEST["txtimagen"];
$password = md5($pass);



 
$con= mysql_connect("localhost", "root") or die ("error en la conexion");
mysql_select_db("formulario")or die("error en DB");
$res=mysql_query("INSERT into usuario (nombre_usr,paterno,materno,login,password,nivel,fono,email,img,estado)VALUES ('$nombre','$paterno','$materno','$login','$password','$nivel','$fono','$email','$img', 'habilitado')") or die("error en tb usuarios");

mysql_close($con);

echo "Nuevo usuario creado correctamente"


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
		<td width="230" class="sidebarText" id="padding"><br />

		&nbsp;<br />		</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="440" valign="top"><br />
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="440">
		<tr>
		<td class="pageName"><p align="center">Usuario Registrado Exitosamente</p></td>
		</tr>

		<tr>
		<td class="bodyText"><p align="center">&nbsp;</p>
		  <form id="form5" name="form5" method="post" action="">
		    </label></form>
		  </td>
		</tr>
	</table>
	 <br />
	&nbsp; <br />
    <a href="crear_usuarios.php" class="subHeader"> volver atras </a><br />	</td>
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
