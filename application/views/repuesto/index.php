<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Valor</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($repuestos as $r) {?>
        <tr>
            <td><?php echo $r->ID_Repuesto ?></td>
            <td><?php echo $r->Nombre ?></td>
            <td><?php echo $r->Valor ?></td>
        </tr>
    <?php }?>
</table>
