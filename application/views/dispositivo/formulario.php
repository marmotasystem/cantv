<?php $accion = ( $dispositivo->id != null )? 'actualizar' : 'create' ?>
<?= form_open('dispositivos/'.$accion,'',array('dispositivo[id]'=>$dispositivo->id));?> 
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>

    <div>
      <label>Direccion IP:
        <input id="ip_address" type="text" name="dispositivos[ip_address]" placeholder="Ingrese Direccion IP..." required value="<?= $dispositivo->ip_address?>">
      </label>
    </div>

    <div>
      <br><input class='btn btn-success' type="submit" value="Enviar Datos"></br>
    </div>
  </fieldset> 
</form>