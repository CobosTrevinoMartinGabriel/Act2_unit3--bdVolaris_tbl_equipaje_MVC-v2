<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new bd_volarisModel();
        }
        public function guardar($id,$idCliente,$idVuelo,$peso_gr,$tipoEquipaje,$size,$equipajeMano,$pesoMano){
            $id = $this->model->insertar($idCliente,$idVuelo,$peso_gr,$tipoEquipaje,$size,$equipajeMano,$pesoMano);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $idCliente,$idVuelo,$peso_gr,$tipoEquipaje,$size,$equipajeMano,$pesoMano){
            return ($this->model->update($id,$idCliente,$idVuelo,$peso_gr,$tipoEquipaje,$size,$equipajeMano,$pesoMano) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>