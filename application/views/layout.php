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
          <li>
           <?=  anchor('#', 'Localidad',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
            <ul class="dropdown-menu">
              <li> <?=  anchor('localidades', 'Listar');?> </li>
              <li> <?=  anchor('localidades/nuevo', 'Nuevo');?> </li>
            </ul>
          </li>
          <li>
            <?=  anchor('#', 'Dispositivos',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
            <ul class="dropdown-menu">
              <li> <?=  anchor('Dispositivos', 'Listar');?> </li>
              <li> <?=  anchor('Dispositivos/nuevo', 'Nuevo');?> </li>
            </ul>  
          </li>
          <li>
           <?=  anchor('interfaces/nuevo', 'Interfaces');?>
          </li>
        </ul>
      </nav>
      <?php include($vista.'.php'); ?>
    </div>
  </body>
</html>