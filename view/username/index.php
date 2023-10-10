<?php
require_once("C:/xampp/htdocs/cruda/view/head/head.php");
require_once("C:/xampp/htdocs/cruda/controller/usernameController.php");

$obj = new usernameController();
$rows = $obj->index();

?>

<div class="mb-3">
    <a href="/cruda/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>
<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td>
                        <a href="show.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver</a>
                        <a href="update.php?id=<?= $row[0] ?>" class="btn btn-success">Modificar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row[0] ?>">Eliminar</a>

                        <!-- Modal de confirmación de eliminación -->
                        <div class="modal fade" id="exampleModal<?= $row[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este usuario?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado, no se podrá recuperar el usuario con ID <?= $row[0] ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("C:/xampp/htdocs/cruda/view/head/footer.php");
?>
