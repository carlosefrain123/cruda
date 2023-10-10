<?php
    class usernameController{
        private $model;
        public function __construct(){
            require_once('C:/xampp/htdocs/cruda/model/usernameModel.php');
            $this->model=new usernameModel();
        }
        public function guardar($nombre){
            $id=$this->model->insertar($nombre);
            return ($id!=false) ? header("Location: show.php ? id=".$id) : header("Location: create.php");
        }
        public function show($id){
            $idshow=$this->model->show($id);
            return ($idshow!=false)?$idshow: header("Location: index.php");
        }
        public function index(){
            $idindex=$this->model->index();
            return ($idindex!=false)?$idindex:false;
        }
        public function update($id,$nombre){
            $idUpdate=$this->model->update($id,$nombre);
            return ($idUpdate!=false)?header("Location: show.php ? id=".$id) : header("Location: index.php");
        }
        public function delete($id){
            $idDelete=$this->model->delete($id);
            return ($idDelete!=false)? header("Location: index.php") : header("Location: show.php?id=".$id);
        }
    }
?>