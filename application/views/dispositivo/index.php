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
    <? foreach ($dispositivo as $dispositivos) : ?>
      <tr>
        <td> <?= $dispositivos->nombre ?></td>
        <td> <?= $dispositivos->ip_address ?> </td>
        <td> <?= $dispositivos->modelo ?> </td>
        <td> <?= $dispositivos->proveedor ?> </td>

        <td> <?= anchor('dispositivos/editar/'.$dispositivos->id, "Editar"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>