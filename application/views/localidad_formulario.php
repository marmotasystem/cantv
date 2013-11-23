<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
  </head>
  <body>
    
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

  </body>
</html>