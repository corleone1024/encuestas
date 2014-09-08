    <form name="form1" method="get" action="creaformulario.php">
    	
      <table width="431" border="0" class='CSSTableGenerator'>
        <tr>
          <td width="149">Nuevo Formulario</td>
          <td width="272"></td>
        </tr>
        <tr>
          <td width="149">Nombre del formulario:</td>
    <td width="272"><label>
            <input type="text" name="txtnombre" id="txtnombre">
          </label></td>
        </tr>
        <tr>
          <td>Descripcion:</td>
          <td><label>
          <textarea name="descripcion" id="descripcion" cols="20" rows="4"></textarea>
          </label></td>
        </tr>
        <tr>
          <td>Estado:</td>
          <td><label>
            <select name="cboestado" id="cboestado">
              <option>habilitado</option>
              <option>deshabilitado</option>
                                    </select>
          </label></td>
        </tr>
  </table>
      
      <p>
        <label>        </label>
        <label></label>
      </p>
      
      
      <label>
          <input type="submit" name="boton_agregar" id="boton_agregar" value="Guardar">
      </label>
      <label>
 
 		 <input type="button" value="Volver al Menu" onClick="javascript: location.href='menu_admin.php';" />
     </label>
 
  </form>
  <?php
echo date("m-d-Y");  
  ?>
