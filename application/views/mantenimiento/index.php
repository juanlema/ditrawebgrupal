<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col">Fecha Programado</th>
        <th scope="col">Placa Vehículo</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($mantenimientos as $m) {?>
        <tr>
            <td><?php echo $m->ID_Mantenimiento ?></td>
            <td><?php echo $m->Descripcion ?></td>
            <td><?php echo $m->Fecha_Programado ?></td>
            <td><?php echo $m->Placa_Vehiculo ?></td>
        </tr>
    <?php }?>
</table>
