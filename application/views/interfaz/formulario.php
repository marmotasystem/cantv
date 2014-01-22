<?php $accion = ( $interfaz->id != null )? 'actualizar' : 'create' ?>
<?= form_open('interfaces/'.$accion,'',array('interfaces[id]'=>$interfaz->id));?>    
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>
    <div>      
      <label>Dispositivos: </br>
        <?= form_dropdown('[dispositivos_id]', $dispositivos,$interfaz->dispositivos_id);?>
      </label>
    </div>      

    <div>    
      <label>IP:
        <input id="ip" type="text" name="interfaces[ip]" placeholder="Ingrese IP..." required value="<?= $interfaz->ip?>">
      </label>
    </div>

    <div>    
      <label>Tipo:
        <input id="tipo" type="text" name="interfaces[tipo]" placeholder="Ingrese Tipo..." required value="<?= $interfaz->tipo?>">
      </label>
    </div>

    <div>    
      <label>Numero:
        <input id="numero" type="text" name="interfaces[numero]" placeholder="Ingrese Numero..." required value="<?= $interfaz->numero?>">
      </label>
    </div>

    <div>    
      <label>Nombre:
        <input id="nombre" type="text" name="interfaces[nombre]" placeholder="Ingrese Nombre..." required value="<?= $interfaz->nombre?>">
      </label>
    </div>

    <div>    
      <label>Trafico:
        <input id="trafico" type="text" name="interfaces[trafico]" placeholder="Ingrese Trafico..." required value="<?= $interfaz->trafico?>">
      </label>
    </div>

    <div>    
      <label>Descripcion:
        <input id="descripcion" type="text" name="interfaces[descripcion]" placeholder="Ingrese Descripcion..." required value="<?= $interfaz->descripcion?>">
      </label>
    </div>

    <div>    
      <label>Velocidad Fisica:
        <input id="speed" type="text" name="interfaces[speed]" placeholder="Ingrese Informacion..." required value="<?= $interfaz->speed?>">
      </label>
    </div>

    <div>    
      <label>Velocidad Logica:
        <input id="bw" type="text" name="interfaces[bw]" placeholder="Ingrese Informacion..." required value="<?= $interfaz->bw?>">
      </label>
    </div>

    <div>
      <br><input class='btn btn-success' type="submit" value="Enviar Datos">
      <input class='btn btn-success' type="reset" value="Borrar Datos"></br>
    </div>
    <br>
      <p align="right"><a href= "http://localhost/proyecto_cantv/index.php"> Volver a la Pagina Principal</a></br>
  </fieldset> 
</form>