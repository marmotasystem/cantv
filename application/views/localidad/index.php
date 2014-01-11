<h2>
  Listado de Localidades 
</h2>
<table class='table'>
  <thead>
    <tr>
      <th>Nombre </th>
      <th>Estado </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($localidades as $localidad) : ?>
      <tr>
        <td> <?= $localidad->nombre ?></td>
        <td> <?= $localidad->estado() ?> </td>
        <td> <?= anchor('localidades/editar/'.$localidad->id, "Editar"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>
<br>
<p align="right"><a href= "http://localhost/proyecto_cantv/index.php"> Volver a la Pagina Principal</a></br><br>
