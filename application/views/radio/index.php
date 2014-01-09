<h1>
  Listado de Radios
</h1>
<table class='table'>
  <thead>
    <tr>
      <th>Nombre </th>
      <th>Localidad </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($radios as $radio) : ?>
      <tr>
        <td> <?= $radio->nombre ?></td>
        <td> <?= $radio->localidad() ?> </td>
        <td> <?= anchor('radios/editar/'.$radio->id, "Editar"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>