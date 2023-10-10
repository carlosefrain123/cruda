<?php
require_once("C:/xampp/htdocs/cruda/controller/usernameController.php");
$obj = new usernameController();
$obj->delete($_GET['id']);/**print_r($obj->index()); */
?>