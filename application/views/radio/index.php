<h2>
 Listado de Radios 
</h2>
<table class='table'>
  <thead>
    <tr>
      <th>Localidad </th>
      <th>Nombre </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($radio as $radio) : ?>
      <tr>
        <td> <?= $radio->localidad() ?></td>
        <td> <?= $radio->nombre ?></td>
        <td> <?= anchor('radios/editar/'.$radio->id, "Editar"); ?> </td>
        <td> <?= anchor('radios/interfaces/'.$radio->id, "Interfaces"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>
<br>
<p align="right"><a href= "http://localhost/proyecto_cantv/index.php"> Volver a la Pagina Principal</a></br><br>