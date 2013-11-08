<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
  </head>
  <body>
    <form action="localidad_formulario.php" method="post">
    <center>

    <h2>Formulario de Registro Localidad</h2>

    </center>    
      <fieldset width="75%">
    
        <legend>Introduzca los Datos</legend>

        <p>      
          <label>Estado: <br/>
          <input  id="estado" name"Estado:" type="text" name="Estado:" placeholder="Ingrese Estado..."
                        autofocus required size="50">
          </label>
        </p>
        <p>      
          <label>Localidad: <br/>
          <input  id="nom_localidad" name"Nombre Localidad:" type="text" name="Nombre Laocalidad:" placeholder="Ingrese Nombre"
                        autofocus required size="50">
          </label>
        </p>
    <center> <input type="submit" value="Enviar Datos"> </center>

      </fieldset> 

  </form>
  </body>
</html>