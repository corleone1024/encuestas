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
	$nombform = $_SESSION["nombform"];
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
	<td width="4">&nbsp;</td>
	<td width="6">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="2" valign="top" bgcolor="#26354A"><form id="form1" name="form1" method="post" action="">
	</form>
	  <br /></td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="710" valign="top"><br />
	  <table border="0" cellspacing="0" cellpadding="0" width="440">
		<tr>
		<td class="pageName"><p align="center">Escriba la pregunta</p></td>
		</tr>

		<tr>
		<td class="bodyText"><p>&nbsp;</p>
		  
          <form name="form1" action="insertacrearpreguntamultiple.php" method="get">
  <p>Inserte su pregunta:
    <br />
    <textarea name="pregunta" id="pregunta" cols="45" rows="5"></textarea>
</p>
  <p>
    <label>Seleccione el numero de opciones de respuesta: 
    <select name="cbonropreg" id="select">
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
            </select>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="Crear pregunta" />
    </label>
</p>
</form>		  
</td>
		</tr>
	</table>
	 <br />
	&nbsp;<br />	</td>
	<td width="4">&nbsp;</td>
	<td width="6">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr>
	<td width="15">&nbsp;</td>
	<td width="4">&nbsp;</td>
	<td width="50">&nbsp;</td>
	<td width="710">&nbsp;</td>
	<td width="4">&nbsp;</td>
	<td width="6">&nbsp;</td>
	</tr>
</table>
</body>
</html>
