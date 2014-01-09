<?php $accion = ( $radio->id != null )? 'actualizar' : 'create' ?>
<?= form_open('radios/'.$accion,'',array('radios[id]'=>$radio->id));?>    
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>
    <div>      
      <label>Estado: </br>
        <?= form_dropdown('radios[localidad_id]', $localidades,$radio->localidad_id);?>
      </label>
    </div>      
    <div>    
      <label>Radio
        <input id="nombre" type="text" name="radios[nombre]" placeholder="Ingrese Nombre..." required value="<?= $radio->nombre?>">
      </label>
    </div>
    <div>
      <br><input class='btn btn-success' type="submit" value="Enviar Datos"></br>
    </div>
  </fieldset> 
</form>