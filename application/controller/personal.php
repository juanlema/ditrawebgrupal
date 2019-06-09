<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/7/2019
 * Time: 11:10 AM
 */

class personal extends Controller
{
    public function index()
    {
        $modelo = $this->loadModel('PersonalModel');
        $personal = $modelo->obtenerPersonal();

        require 'application/views/_templates/header.php';
        require 'application/views/personal/index.php';
        require 'application/views/_templates/footer.php';
    }

    public function crear()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/personal/crear.php';
        require 'application/views/_templates/footer.php';
    }

    public function crearPersonal(){
        if (isset($_POST['documento']) && isset($_POST['nombreCompleto']) && isset($_POST['email'])){
            $modelo = $this->loadModel('PersonalModel');

            $modelo->crearPersonal($_POST['documento'], $_POST['nombreCompleto'], $_POST['email']);
        }

        header('location: ' . URL . 'personal/');
    }

    public function eliminar()
    {
        $modelo = $this->loadModel('PersonalModel');
        $personal = $modelo->obtenerPersonal();

        require 'application/views/_templates/header.php';
        require 'application/views/personal/eliminar.php';
        require 'application/views/_templates/footer.php';
    }

    public function eliminarPersonal()
    {
        $documento = $_GET['Documento'];

        $modelo = $this->loadModel('PersonalModel');
        $modelo->eliminarPersonal($documento);

        header('location: ' . URL . 'personal');
    }
}
