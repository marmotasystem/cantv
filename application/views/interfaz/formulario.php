<?php $accion = ( $interfaces->id != null )? 'actualizar' : 'create' ?>
<?= form_open('interfaces/'.$accion,'',array('interfaces[id]'=>$interfaces->id));?>    
  <fieldset width="80%">
    <legend>Introduzca los Datos</legend>
    <div>      
      <label>Dispositivos: </br>
        <?= form_dropdown('[dispositivos_id]', $dispositivos,$interfaces->dispositivos_id);?>
      </label>
    </div>      

    <div>    
      <label>IP:
        <input id="ip" type="text" name="interfaces[ip]" placeholder="Ingrese IP..." required value="<?= $interfaces->ip?>">
      </label>
    </div>

    <div>    
      <label>Tipo:
        <input id="tipo" type="text" name="interfaces[tipo]" placeholder="Ingrese Tipo..." required value="<?= $interfaces->tipo?>">
      </label>
    </div>

    <div>    
      <label>Numero:
        <input id="numero" type="text" name="interfaces[numero]" placeholder="Ingrese Numero..." required value="<?= $interfaces->numero?>">
      </label>
    </div>

    <div>    
      <label>Nombre:
        <input id="nombre" type="text" name="interfaces[nombre]" placeholder="Ingrese Nombre..." required value="<?= $interfaces->nombre?>">
      </label>
    </div>

    <div>    
      <label>Trafico:
        <input id="trafico" type="text" name="interfaces[trafico]" placeholder="Ingrese Trafico..." required value="<?= $interfaces->trafico?>">
      </label>
    </div>

    <div>    
      <label>Descripcion:
        <input id="descripcion" type="text" name="interfaces[descripcion]" placeholder="Ingrese Descripcion..." required value="<?= $interfaces->descripcion?>">
      </label>
    </div>

    <div>    
      <label>Velocidad Fisica:
        <input id="speed" type="text" name="interfaces[speed]" placeholder="Ingrese Informacion..." required value="<?= $interfaces->speed?>">
      </label>
    </div>

    <div>    
      <label>Velocidad Logica:
        <input id="bw" type="text" name="interfaces[bw]" placeholder="Ingrese Informacion..." required value="<?= $interfaces->bw?>">
      </label>
    </div>

    <div>
      <br><input class='btn btn-success' type="submit" value="Enviar Datos"></br>
    </div>
  </fieldset> 
</form>