<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Agudelo
 * Date: 6/8/2019
 * Time: 10:56 AM
 */

class Mantenimiento extends Controller
{
    public function index()
    {
        $modelo = $this->loadModel('MantenimientoModel');
        $mantenimientos = $modelo->obtenerMantenimientos();

        require 'application/views/_templates/header.php';
        require 'application/views/mantenimiento/index.php';
        require 'application/views/_templates/footer.php';
    }

    public function crear()
    {
        $modelo = $this->loadModel('VehiculoModel');
        $vehiculos = $modelo->obtenerVehiculos();

        require 'application/views/_templates/header.php';
        require 'application/views/mantenimiento/crear.php';
        require 'application/views/_templates/footer.php';
    }

    public function crearMantenimiento()
    {
        if(isset($_POST['descripcion']) && isset($_POST['fecha']) && isset($_POST['placa'])){
            $model = $this->loadModel('MantenimientoModel');
            $model->crearMantenimiento($_POST['descripcion'], $_POST['fecha'], $_POST['placa']);
        }

        header('location: ' . URL . 'mantenimiento/');
    }
}
