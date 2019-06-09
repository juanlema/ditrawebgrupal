<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/8/2019
 * Time: 10:28 AM
 */

class Repuesto extends Controller
{
    public function index()
    {
        $modelo = $this->loadModel('RepuestoModel');
        $repuestos = $modelo->obtenerRepuestos();

        require 'application/views/_templates/header.php';
        require 'application/views/repuesto/index.php';
        require 'application/views/_templates/footer.php';
    }

    public function crear()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/repuesto/crear.php';
        require 'application/views/_templates/footer.php';
    }

    public function crearRepuesto()
    {
        if (isset($_POST['nombre']) && isset($_POST['valor'])) {
            $modelo = $this->loadModel('RepuestoModel');
            $modelo->crearRepuesto($_POST['nombre'], $_POST['valor']);
        }

        header('location: ' . URL . 'repuesto/');
    }
}
