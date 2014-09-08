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
          <td width="193" align="center" nowrap="nowrap" class="navText"><a href="formularios.php"> CREAR FORMULARIOS</a></td>
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
		      <input type="submit" name="atras1" id="atras1" value="Atras" />
		      </div>
		  </label>
		  </form>
		<br />

		&nbsp;<br />		</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="440" valign="top"><br />
	  <table border="0" cellspacing="0" cellpadding="0" width="440">
		<tr>
		<td class="pageName"><p align="center">USUARIOS</p></td>
		</tr>

		<tr>
		  <td class="bodyText">   
          <form name="form1" action="insertarusuario.php" method="get">
          <table width="406" border="1">
            <tr>
              <td width="164">Nuevo Usuario</td>
              <td width="226"></td>
            </tr>
            <tr>
              <td width="164">Nombre:</td>
              <td width="226"><label>
                <input type="text" name="txtnombre" id="txtnombre" autofocus="autofocus" required>
              </label></td>
            </tr>
            <tr>
              <td>Apellido Paterno:</td>
              <td><label>
                <input type="text" name="txtpaterno" id="txtpaterno" required>
              </label></td>
            </tr>
            <tr>
              <td>Apellido Materno</td>
              <td><label>
                <input type="text" name="txtmaterno" id="txtmaterno" required>
              </label></td>
            </tr>
            <tr>
              <td>Login:</td>
              <td><label>
                <input type="text" name="txtlogin" id="txtlogin" required>
              </label></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><label>
                <input type="password" name="txtpass" id="txtpass" required>
              </label></td>
            </tr>
            <tr>
              <td>Nivel:</td>
              <td><label>
                <select name="cbonivel" size="1" id="cbonivel">
                  <option>administrador</option>
                  <option>Usuario</option>
                                                </select>
              </label></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td><label>
                <input type="tel" name="txttelefono" id="txttelefono" required>
              </label></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><label>
                <input type="email" name="txtemail" id="txtemail" required>
              </label></td>
            </tr>
            <tr>
              <td>Imagen::</td>
              <td><label>
                <input type="text" name="txtimagen" id="txtimagen" required>
              </label></td>
            </tr>
            
          </table>
        <label><br>

          <input type="submit" name="boton_guardar" id="boton_guardar" value="Guardar">
      </label>
        </form>
          
          </td>
		</tr>
	</table>
	 <br /></td>
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
