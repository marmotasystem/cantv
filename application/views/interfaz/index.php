<h2>
 Listado de Interfaces 
</h2>
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
        <td> <?= $interfaz->dispositivo() ?> </td>
        <td> <?= $interfaz->ip ?> </td>
        <td> <?= $interfaz->tipo ?></td>
        <td> <?= $interfaz->numero ?> </td>
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
<br>
<p align="right"><a href= "http://localhost/proyecto_cantv/index.php"> Volver a la Pagina Principal</a></br><br>