<?php
   session_start();
   if ( isset($_REQUEST["error"]) ){
      $qerror = $_REQUEST["error"];
	  if ($qerror == 1 )
	     echo "<hr>Su palabra clave no es la de la Base<hr>";
	  else
	     echo "<hr>Nombre de Usuario no existe en la BASE<hr>";
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
<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<style type="text/css">
<!--
.Estilo2 {color: #000000}
-->
</style>
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
	<td width="705" colspan="2" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td class="navText" align="center" nowrap="nowrap"><a href="javascript:;">INICIO</a></td>
        </tr>
      </table>	</td>
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
	<td width="35"><img src="mm_spacer.gif" alt="" width="35" height="1" border="0" /></td>
	<td width="710" valign="top"><br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="2" width="500">
		<tr>
		<td class="pageName">Sistema de Formularios</td>
		</tr>

		<tr>
		<td class="bodyText">
		<p>La encuesta es una técnica cuantitativa que consta de una serie de preguntas estandarizadas que son realizadas a una muestra representativa. A partir de esto se pueden obtener mediciones cuantitativas de cualidades tanto objetivas como subjetivas de la población. Las encuestas pueden ser clasificadas de distintas maneras:</p>

		<p>Según sus <strong>objetivos</strong> existen dos clases de encuestas de opinión:</p>
		<p><strong>Encuestas descriptivas: </strong>estas encuestas buscan reflejar o documentar las actitudes o condiciones presentes. Esto significa intentar descubrir en qué situación se encuentra una determinada población en momento en que se realiza la encuesta. </p>
		<p><strong>Encuestas analíticas: </strong>estas encuestas en cambio buscan, además de describir, explicar los por qué de una determinada situación. Este tipo de encuestas las hipótesis que las respaldan suelen contrastarse por medio de la exanimación de por lo menos dos variables, de las que se observan interrelaciones y luego se formulan inferencias explicativas.</p>
		<p>Según las <strong>preguntas</strong>:<span id="more-123"> </span></p>
		<p><strong>De respuesta abierta: </strong>en estas encuestas se le pide al interrogado que responda con sus propias palabras a la pregunta formulada. Esto le otorga mayor libertad al entrevistado y al mismo tiempo posibilitan adquirir respuestas más profundas así como también preguntar sobre el porqué y cómo de las respuestas realizadas. Por otro lado, permite adquirir respuestas que no habían sido tenidas en cuenta a la hora de hacer los formularios y pueden crear así relaciones nuevas con otras variables y respuestas.</p>
		<p><strong>De respuesta cerrada: </strong>en estas los encuestados deben elegir para responder una de las opciones que se presentan en un listado que formularon los investigadores. Esta manera de encuestar da como resultado respuestas más fáciles de cuantificar y de carácter uniforme. El problema que pueden presentar estas encuestas es que no se tenga en el listado una opción que coincida con la respuesta que se quiera dar, por esto lo ideal es siempre agregar la opción “otros”.</p>
		<br /></td>
		</tr>
	</table>	 </td>
	<td><p>&nbsp;</p>
	  <p>&nbsp;</p>
     <form id="miform" name="miform" method="get" action="valida.php">

	  <table width="284" border="0" align="left" cellpadding="0" cellspacing="0">

        <tr>
          <td width="142" align="right" class="logo Estilo2">
          <strong>Login</strong>:</td>
          <td width="10" align="right">&nbsp;</td>
          <td width="138" align="left"><div align="left">
            <input type="text" name="login" id="login" />
          </div></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="left"><div align="left"></div></td>
        </tr>
        <tr>
          <td align="right"><label></label>
            <label><span class="logo Estilo2"><strong>Password:</strong></span></label></td>
          <td align="right">&nbsp;</td>
          <td align="left"><input type="password" name="psw" id="password" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>  
          <input name="btnIngresar" type="submit" id="btnIngresar" value="Ingresar" />
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>          </td>
          <td>&nbsp;</td>
          <td>
            <label>
            <input type="image" height="200" width="500" name="sist" id="sist" src="imagenes/logo-sistemas.jpg" />
            </label>                    </td>
        </tr>
        <tr>
          <td height="29">&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
        </tr>
      </table>
        </form>
	 
</body>
</html>

