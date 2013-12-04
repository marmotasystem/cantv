<h1>
  Listado de Dispositivos
</h1>
<table class='table'>
  <thead>
    <tr>
      <th> Nombre </th>
      <th> Direccion IP </th>
      <th> Modelo </th>
      <th> Proveedor </th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($dispositivos as $dispositivo) : ?>
      <tr>
        <td> <?= $dispositivo->nombre ?></td>
        <td> <?= $dispositivo->ip_address ?> </td>
        <td> <?= $dispositivo->modelo ?> </td>
        <td> <?= $dispositivo->proveedor ?> </td>

        <td> <?= anchor('dispositivos/editar/'.$dispositivos->id, "Editar"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>