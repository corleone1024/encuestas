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
$link=0;
$link=$_REQUEST['link'];
	$con= mysql_connect("localhost", "root") or die ("error en la conexion");
	mysql_select_db("formulario")or die("error en DB");
//	$res=mysql_query("select * from formulario") or die("error en tb formulario");

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

<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
Listado de Formulario<p>

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
        
        <form id="form2" name="form2" method="post" action="reportes.php">
		  <label>
		    <div align="center">
		      <input type="submit" name="Salir" id="Salir" value="Atras" />
		      </div>
		  </label>
		  </form>
        
        		</td>
		</tr>
	</table>	</td>
	<td width="50" valign="top"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
	<td width="440" valign="top"><br />
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="440">
		<tr>
		<td class="pageName"><p align="center">Listado de Respuestas</p></td>
		</tr>

		<tr>
		<td class="bodyText"><p>&nbsp;</p>
        
        <?PHP

//$nom_f=$_REQUEST[''];
//	if($res){
	//	echo '<br>coneccion correcta';
		
		$res=mysql_query("SELECT pregunta, cod_preg FROM pregunta WHERE cod_f IN (SELECT cod_f FROM formulario WHERE nombre =  '$link')");
		$con=1;
		while($f=mysql_fetch_row($res)){
			$con1=1;
		 echo '<b>'.$con.": ".$f[0].'<br></b>';
		 $res1=mysql_query("select respuesta from respuesta_abierta where cod_preg=$f[1]");
		 	while($f1=mysql_fetch_row($res1)){
				echo $con1.": ".$f1[0].'<br>';
					$con1++;
				}
		/*	$res2=mysql_query("select respuesta from respuesta_multiple where cod_preg=$f[1]")or die('error en resp_mul');

		 	while($f2=mysql_fetch_row($res2))
			{
				echo $con2.": ".$f2[0].'<br>';
					$con1++;
				}
				$res3=mysql_query("select opcion from respuesta_radio_button where cod_preg=$f[1]");
		 	while($f3=mysql_fetch_row($res3)){
				echo $con3.": ".$f3[0].'<br>';
					$con1++;
				}
				$res4=mysql_query("select respuesta from respuesta_resumen where cod_preg=$f[1]");
		 	while($f4=mysql_fetch_row($res4)){
				echo $con4.": ".$f4[0].'<br>';
					$con1++;
				}*/
				echo "<br>";
			$con++;	
			
		}
?>
        
		  <p>&nbsp;</p>
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
