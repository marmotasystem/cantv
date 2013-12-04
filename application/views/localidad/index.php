<h1>
  Listado de Localidades
</h1>
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