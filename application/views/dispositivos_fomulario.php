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
    <form action="dispositivos_formulario.php" method="post">
    
      <h2>Formulario de Registro Dispositivos</h2>

      <fieldset width="75%">
    
        <legend>Introduzca los Datos</legend>

        <div>      
        <br> <label>Dispositivo: </br>
          <input  id="nom_dispositivos" type="text" name="dispositivos[nombre]" placeholder="Ingrese Nombre..."
                  required size="50">
          </label>
        </div>
        

        <div>      
        <br> <label> IP Dispostivo: </br>
          <input  id="ip_dispositivos" type="text" name="dispositivos[ip]" placeholder="Ingrese IP..."
                  required size="50">
          </label>
        </div>


        <div>      
        <br> <label>Modelo: </br>
          <input  id="modelo" type="text" name="dispositivos[modelo]" placeholder="Ingrese Modelo..."
                  required size="50">
          </label>
        </div>

        <div>    
        <br> <label>Proveedor: </br>
          <input  id="proveedor" type="text" name="dispositivos[proveedor]" placeholder="Ingrese Proveedor..."
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