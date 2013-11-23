<?php echo form_open('localidades/create');?>
  <h2>Formulario de Registro Localidad</h2>
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>
    <div>      
      <label>Estado: </br>
        <?php echo form_dropdown('localidad[estado_id]', $estados);?>
      </label>
    </div>      
    <div>    
      <label>Localidad
        <input id="nom_localidad" type="text" name="localidad[nom_localidad]" placeholder="Ingrese Nombre..." required>
      </label>
    </div>
    <div>
      <br><input type="submit" value="Enviar Datos"></br>
    </div>
  </fieldset> 
</form>