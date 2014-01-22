<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">

  </head>
  <body>
    <div class='container'>
      <?= img('img/cabezal_b.gif')?>
      <nav>
        <ul class="nav nav-tabs">
          <li>
            <?=  anchor('#','Localidades',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
            <ul class="dropdown-menu">
              <li> <?=  anchor('localidades', 'Listar');?> </li>
              <li> <?=  anchor('localidades/nuevo', 'Nuevo');?> </li>
            </ul>
          </li>
          <li>
            <?=  anchor('#','Dispositivos',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
            <ul class="dropdown-menu">
              <li> <?=  anchor('Dispositivos', 'Listar');?> </li>
              <li> <?=  anchor('Dispositivos/nuevo', 'Nuevo');?> </li>
            </ul>  
          </li>
          <li>
           <?=  anchor('#','Interfaces',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
           <ul class="dropdown-menu">
              <li> <?=  anchor('Interfaces', 'Listar');?> </li>
              <li> <?=  anchor('Interfaces/nuevo', 'Nuevo');?> </li>
            </ul>  
          </li>
          <li>
           <?=  anchor('#','Radios',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
           <ul class="dropdown-menu">
              <li> <?=  anchor('Radios', 'Listar');?> </li>
              <li> <?=  anchor('Radios/nuevo', 'Nuevo');?> </li>
            </ul>  
          </li>
          <li>
           <?=  anchor('#','Documentación',array('class'=>'dropdown-toggle',"data-toggle"=>"dropdown"));?>
           <ul class="dropdown-menu">
              <li> <?=  anchor('documentacion', 'Listar');?> </li>
              
            </ul>  
          </li>
       </nav>
      <?php include($vista.'.php'); ?>
      <?= img('img/pie_pagina.gif')?>
    </div>
  </body>
  
</html>