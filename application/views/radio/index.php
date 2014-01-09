<h1>
  Listado de Radios
</h1>
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
        <td> <?= anchor('radios/enlaces/'.$radio->id, "Enlaces"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>