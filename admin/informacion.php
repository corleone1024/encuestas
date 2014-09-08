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
<style type="text/css">
<!--
.Estilo1 {
	font-size: 16px
}
-->
</style>
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="17" nowrap="nowrap"><img src="mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="3" class="logo" nowrap="nowrap">Sistemas <span class="tagline">| Tu lo imaginas nosotros lo creamos</span></td>
	<td width="5">&nbsp;</td>
	<td width="174">&nbsp;</td>
  </tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="17" nowrap="nowrap">&nbsp;</td>
	<td colspan="3" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td width="58" align="center" nowrap="nowrap" class="navText"><a href="menu_admin.php">INICIO</a></td>
          <td width="167" align="center" nowrap="nowrap" class="navText"><a href="usuarios.php">USUARIOS</a></td>
          <td width="193" align="center" nowrap="nowrap" class="navText"><a href="formularios.php">CREAR FORMULARIOS</a></td>
          <td width="189" align="center" nowrap="nowrap" class="navText"><a href="reportes.php">REPORTES</a></td>
          <td width="247" align="center" nowrap="nowrap" class="navText"><a href="informacion.php">INFORMACION</a></td>
        </tr>
      </table>	</td>
	<td width="5">&nbsp;</td>
	<td width="174">&nbsp;</td>
  </tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="2" valign="top" bgcolor="#26354A"><form id="form1" name="form1" method="post" action="">
	    <label>
	    <input type="image" width="255" height="286" name="sist" id="sist" src="../imagenes/logo-sistemas.jpg" />
	    </label>
      </form>
	  <br />
	<table border="0" cellspacing="0" cellpadding="0" width="230">
		<tr>
		<td width="230" class="sidebarText" id="padding"><br />
        
        <form id="form2" name="form2" method="post" action="salir.php">
		  <label>
		    <input type="submit" name="Salir" id="Salir" value="Salir" />
		    </label>
		  </form>
        		</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="603" valign="top"><br />
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="592">
		<tr>
		<td width="592" class="pageName"><p align="center" class="subHeader Estilo1">Universidad Mayor de San Andrés</p>
		  <p align="center" class="subHeader Estilo1">Facultad de Ciencias Puras y Naturales</p>
		  <p align="center" class="subHeader Estilo1">Carrera de Informática</p></td>
		</tr>

		<tr>
		<td class="bodyText"><form id="form2" name="form2" method="post" action="">
		    <label></label>
		     <div align="left"></div>
		     
	          <div align="center">
	            <p>
	              <input type="image" name="escudo" id="escudo" src="img/LOGO UMSA.gif" />
	            </p>
	            <div align="left">
	              <p align="center" class="Estilo1">SISTEMA DE FORMULARIO VÍA WEB</p>
	              <p align="center"><span class="Estilo1">MULTIMEDIAL</span>:</p>
	              <p align="center">Docente: MSc. Zeballos Reynaldo.</p>
	              <p align="center" class="Estilo1">Equipo de desarrollo:</p>
	              <p align="center"><strong>- </strong>Apaza Choquemiza Victor Hugo      6789190 LP.</p>
                  <p align="center">- Calle  Choque Luis Antonio              8425764  LP.</p>
                  <p align="center">-Choque  Alavi Juan Carlos                6126334  LP.</p>
                  <p align="center">-Cortez  Yujra Gina Veronica              6198836  LP</p>
                  <p align="center">-Huanca  Aro Soledad Sintia               6953231  LP<u></u></p>
<p align="center">&nbsp;</p>
	            </div>
	            </div>
	          <div align="center"></div>
	          <div align="left"></div>
		  </form>		  </td>
		</tr>
	</table>
	 </td>
	<td width="5">&nbsp;</td>
	<td width="174">&nbsp;</td>
  </tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr>
	<td width="17">&nbsp;</td>
	<td width="238">&nbsp;</td>
	<td width="50">&nbsp;</td>
	<td width="603">&nbsp;</td>
	<td width="5">&nbsp;</td>
	<td width="174">&nbsp;</td>
  </tr>
</table>
</body>
</html>
