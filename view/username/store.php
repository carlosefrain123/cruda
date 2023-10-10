<?php
require_once('C://xampp/htdocs/cruda/controller/usernameController.php');
$obj=new usernameController();
$obj->guardar($_POST['nombre']);
?>