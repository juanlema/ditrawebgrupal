<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Placa</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Estado</th>
        <th scope="col">Personal</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($vehiculos as $v) {?>
        <tr>
            <td><?php echo $v->Placa ?></td>
            <td><?php echo $v->Marca ?></td>
            <td><?php echo $v->Modelo ?></td>
            <td><?php echo $v->Descripcion ?></td>
            <td><?php echo $v->Nombre_Estado ?></td>
            <td><?php echo $v->Nombre_Completo . ' (' . $v->Personal_Documento . ')' ?></td>
        </tr>
    <?php }?>
</table>
