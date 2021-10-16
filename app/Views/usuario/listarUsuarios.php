<?=$header; ?> 


<table class="table table-light">
    <tbody>
        <tr>
            <td>email</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>telefono</td>
            <td>acciones</td>
        </tr>
    </tbody>

    <?php foreach($usuario as $dato): ?>
    <tr>
        <td><?=($dato['email']); ?></td>
        <td><?=($dato['nombre']); ?></td>
        <td><?=($dato['apellido']); ?></td>
        <td><?=($dato['telefono']); ?></td>
        <td>
            <a href="<?=base_url('Login/editar'); ?>">editar</a>
            <a href="<?=base_url('Login/eliminar'); ?>">eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>



<?=$footer; ?> 