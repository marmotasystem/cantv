<h1>
  Listado de localidades
</h1>
<table>
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
        <td> <?= $localidad->estado_nombre() ?>></td>
        <td> Acciones </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>