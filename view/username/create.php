<?php
    require_once("c://xampp/htdocs/CrudA/view/head/head.php");
    
?>
  <!--4-->
<form action="../username//store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/cruda/index.php" class="btn btn-danger">Cancelar</a>
</form>
<?php
require_once("c://xampp/htdocs/CrudA/view/head/footer.php");
?>