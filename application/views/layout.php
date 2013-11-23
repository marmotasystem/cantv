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
    <div class='container'>
      <nav>
        <ul class="nav nav-tabs">
          <li class="active">
           <?=  anchor('localidades/nuevo', 'Localidad');?>
            <a href="#"> Localidad </a>
          </li>
          <li>
            <?=  anchor('dispositivos/nuevo', 'Dispositivos');?>
          </li>
          <li>
           <?=  anchor('interfaces/nuevo', 'Intefaces');?>
          </li>
        </ul>
      </nav>
      <?php include($vista.'.php'); ?>
    </div>
  </body>
</html>