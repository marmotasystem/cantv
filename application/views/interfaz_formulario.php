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
    
    <?php echo form_open('interfaces/create');?>
    
      <h2>Formulario de Registro Interfaz</h2>

      <fieldset width="75%">
    
        <legend>Introduzca los Datos</legend>

        <div>      
        <br> <label>Interfaz: </br>
          <input  id="descrpcion" type="text" name="interfaz[descripcion]"
                  placeholder="Ingrese Descripcion..."
                  required size="50">
          </label>
        </div>

        <div>
        <br><input type="submit" value="Enviar Datos"></br>
        </div>

      </fieldset> 

  </body>
</html>