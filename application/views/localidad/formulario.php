<?php $accion = ( $localidad->id != null )? 'actualizar' : 'create' ?>
<?= form_open('localidades/'.$accion,'',array('localidad[id]'=>$localidad->id));?>    
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
      <br><input class='btn btn-success' type="submit" value="Enviar Datos">
      <input class='btn btn-success' type="reset" value="Borrar Datos"></br>
    </div>
    <br>
      <p align="right"><a href= "http://localhost/proyecto_cantv/index.php"> Volver a la Pagina Principal</a></br>
  </fieldset> 
</form>