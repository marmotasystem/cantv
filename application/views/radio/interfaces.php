<h2>
 Listado de ......
</h2>
<table class='table'>
  <thead>
    <tr>
      <th>Dispositivo </th>
      <th>IP </th>
      <th>Tipo </th>
      <th>Nombre </th>
    <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($interfaces as $interfaz) : ?>
      <tr>
        <td> <?= $interfaz->dispositivo() ?> </td>
        <td> <?= $interfaz->ip ?> </td>
        <td> <?= $interfaz->tipo ?></td>
        <td> <?= $interfaz->nombre ?></td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>

<?= form_open('radios/'.$accion,'',array('radios[id]'=>$radio->id));?>    
  <fieldset width="80%">
  
    <legend>Introduzca los Datos</legend>

    <div>    
      <label>Radio
        <input id="nombre" type="text" name="radio[nombre]" placeholder="Ingrese Nombre..." required value="<?= $radio->nombre?>">
      </label>
    </div>
    
    <div> 
      <label>Interfaces: </br>
        <?= form_dropdown('[dispositivos_id]', $dispositivos,$interfaces->dispositivos_id);?>
      </label>
    </div>      
    
    <div>
      <br><input class='btn btn-success' type="submit" value="Enviar Datos">
    </div>
  
  </fieldset> 
</form>