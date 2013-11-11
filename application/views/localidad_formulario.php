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
    <form action="localidad_formulario.php" method="post">
    
      <h2>Formulario de Registro Localidad</h2>

      <fieldset width="80%">
    
        <legend>Introduzca los Datos</legend>

        <div>      
        <br> <label>Estado: </br>
          <input  id="estado" type="text" name="localidad[estado]" placeholder="Ingrese Estado..."
                  required size="50">
          </label>
        </div>
        
        <div>    
        <br> <label>Localidad: </br>
          <input  id="nom_localidad" type="text" name="localidad[nombre]" placeholder="Ingrese Nombre..."
                  required size="50"
          </label>
        </div>

        <div>
        <br><input type="submit" value="Enviar Datos"></br>
        </div>
      </fieldset> 

  </form>
  </body>
</html>