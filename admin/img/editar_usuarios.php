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


   if ( isset($_REQUEST["usuario"]) )
   {
      $loginusr = $_REQUEST["usuario"];
   }


 
					$con= mysql_connect("localhost", "root") or die ("error en la conexion");
					mysql_select_db("formulario")or die("error en DB");
					$res=mysql_query("select * from usuario where login='$loginusr'") or die("error en tb usuarios");

					while($fila = mysql_fetch_assoc($res))
					{
						$id = $fila['cod_usr'];
						$nombre_usr=$fila['nombre_usr'];
						$paterno=$fila['paterno'];
						$materno=$fila['materno'];
						$login=$fila['login'];
						$password=$fila['password'];
						$nivel=$fila['nivel'];
						$fono=$fila['fono'];
						$email=$fila['email'];
						$img=$fila['img'];
						$estado=$fila['estado'];
						
					}
					

mysql_close($con);


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
          <td width="193" align="center" nowrap="nowrap" class="navText"><a href="formularios.php">FORMULARIOS</a></td>
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
		<td width="230" class="sidebarText" id="padding"><form id="form2" name="form2" method="post" action="usuarios.php">
		  <label>
		    <div align="center">
		      <input type="submit" name="atras2" id="atras2" value="Atras" />
		      </div>
		  </label>
		  </form>
		<br />

		&nbsp;<br />		</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="440" valign="top"><br />
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="440">
		<tr>
		<td class="pageName"><p align="center">USUARIOS</p></td>
		</tr>

		<tr>
		<td class="bodyText">
<form name="form1" action="insertaredicionusuario.php" method="get">
          <table width="306" border="1" class='CSSTableGenerator'>
            <tr>
              <td width="268">Usuario</td>
              <td width="475"><input type="text" name="txtid" id="txtid" value="<?php  echo $id; ?>" hidden/></td>
            </tr>
            <tr>
              <td width="268">Nombre:</td>
              <td width="475"><label>
                <input type="text" name="txtnombre" id="txtnombre" value="<?php  echo $nombre_usr; ?>">

              </label></td>
            </tr>
            <tr>
              <td>Apellido Paterno:</td>
              <td><label>
                <input type="text" name="txtpaterno" id="txtpaterno" value="<?php  echo $paterno; ?>">
              </label></td>
            </tr>
            <tr>
              <td>Apellido Materno:</td>
              <td><label>
                <input type="text" name="txtmaterno" id="txtmaterno" value="<?php  echo $materno; ?>">
              </label></td>
            </tr>
            <tr>
              <td>Login:</td>
              <td><label>
                <input type="text" name="txtlogin" id="txtlogin" value="<?php  echo $login; ?>" />
              </label></td>
            </tr>
            <tr>
              <td>Nuevo Password</td>
              <td><label>
                <input type="text" name="txtpass" id="txtpass">
              </label></td>
            </tr>
            <tr>
              <td>Nivel;</td>
              <td><label>
                <select name="cbonivel" id="cbonivel">
                  <option selected="selected">Administrador</option>
                  <option>Administrador</option>
                  <option>Usuario</option>
                  
                </select>
              </label></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td><label>
                <input type="text" name="txttelefono" id="txttelefono" value="<?php  echo $fono; ?>">
              </label></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><label>
                <input type="text" name="txtemail" id="txtemail" value="<?php  echo $email; ?>">
              </label></td>
            </tr>
            <tr>
              <td>Imagen:</td>
              <td><label>
                <input type="text" name="txtimg" id="txtimg" value="<?php  echo $img; ?>">
              </label></td>
            </tr>
            <tr>
              <td>estado:</td>
              <td><label>
              <select name="cboestado" id="cboestado">
                <option selected="selected">habilitado</option>
                <option>habilitado</option>
                <option>deshabilitado</option>
              </select>
              </label></td>
            </tr>
          </table>
        <label><br>
        </label>
        <table width="15" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td><input type="submit" name="boton_agregar" id="boton_agregar" value="Guardar cambios" ></td>
            <td><input type="button" value="Atras" onclick="history.back()" style="font-size: 10 pt" /></td>
          </tr>
        </table>

</form>
</td>
		</tr>
	</table>
	 <br />
	&nbsp;<br />	</td>
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
