<h1>
  Listado de Interfaz
</h1>
<table class='table'>
  <thead>
    <tr>
      <th>Dispositivo </th>
      <th>IP </th>
      <th>Tipo </th>
      <th>Numero </th>
      <th>Nombre </th>
      <th>Trafico </th>
      <th>Descripcion </th>
      <th>Velocidad Fisica </th>
      <th>Velocidad Logica </th>
    <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($interfaces as $interfaz) : ?>
      <tr>
        <td> <?= $interfaz->dispositivo() ?></td>
        <td> <?= $interfaz->ip ?> </td>
        <td> <?= $interfaz->tipo ?></td>
        <td> <?= $interzas->numero ?> </td>
        <td> <?= $interfaz->nombre ?></td>
        <td> <?= $interfaz->trafico ?> </td>
        <td> <?= $interfaz->descripcion ?></td>
        <td> <?= $interfaz->speed ?> </td>
        <td> <?= $interfaz->bw ?></td>
        <td> <?= anchor('interfaces/editar/'.$interfaz->id, "Editar"); ?> </td>
      </tr>
    <? endforeach ?>
  </tbody>
</table>