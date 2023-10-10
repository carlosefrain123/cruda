<?php
require_once("C:/xampp/htdocs/cruda/controller/usernameController.php");
$obj = new usernameController();
$obj->update($_POST['id'],$_POST['nombre']);/**print_r($obj->index()); */
?>