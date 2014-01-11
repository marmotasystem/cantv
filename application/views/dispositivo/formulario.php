<?php $accion = ( $dispositivo->id != null )? 'actualizar' : 'create' ?>
<?= form_open('dispositivos/'.$accion,'',array('dispositivo[id]'=>$dispositivo->id));?> 
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>

    <div>
      <label>Direccion IP:
        <input id="ip_address" type="text" name="dispositivo[ip_address]" placeholder="Ingrese Direccion IP..." required value="<?= $dispositivo->ip_address?>">
      </label>
    </div>

    <div>
      <label>Dispositivo:
        <input id="nombre" type="text" name="dispositivo[nombre]" placeholder="Ingrese Nombre..." required value="<?= $dispositivo->nombre?>">
      </label>
    </div>

    <div>
      <label>Modelo:
        <input id="modelo" type="text" name="dispositivo[modelo]" placeholder="Ingrese Modelo..." required value="<?= $dispositivo->modelo?>">
      </label>
    </div>

    <div>
      <label>Proveedor:
        <input id="proveedor" type="text" name="dispositivo[proveedor]" placeholder="Ingrese Proveedor..." required value="<?= $dispositivo->proveedor?>">
      </label>
    </div>

    <div>
      <br><input class='btn btn-success' type="submit" value="Enviar Datos">
      <input class='btn btn-success' type="reset" value="Borrar Datos"></br>
    </div>
  </fieldset> 
</form>