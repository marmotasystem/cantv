<?php $accion = ( $localidad->id != null )? 'actualizar' : 'create' ?>
<?= form_open('localidades/'.$localidad,'',array('id'=>$localidad->id));?>    
  <h2>Formulario de Registro Localidad</h2>
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>
    <div>      
      <label>Estado: </br>
        <?= form_dropdown('localidad[estado_id]', $estados,$localidad->estado_id);?>
      </label>
    </div>      
    <div>    
      <label>Localidad
        <input id="nom_localidad" type="text" name="localidad[nombre]" placeholder="Ingrese Nombre..." required value="<?= $localidad->nombre?>">
      </label>
    </div>
    <div>
      <br><input type="submit" value="Enviar Datos"></br>
    </div>
  </fieldset> 
</form>