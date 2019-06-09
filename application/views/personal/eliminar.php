<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Documento</th>
        <th scope="col">Nombre Completo</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($personal as $p) {?>
        <tr>
            <td><a href="<?php echo URL ?>personal/eliminarPersonal?Documento=<?php echo $p->Documento ?>">X</a> <?php echo $p->Documento ?></td>
            <td><?php echo $p->Nombre_Completo ?></td>
            <td><?php echo $p->Correo ?></td>
        </tr>
    <?php }?>
</table>
