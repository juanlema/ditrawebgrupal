<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/8/2019
 * Time: 8:33 AM
 */

class Vehiculo extends Controller
{
    public function index()
    {
        $modelo = $this->loadModel('VehiculoModel');
        $vehiculos = $modelo->obtenerVehiculos();

        require 'application/views/_templates/header.php';
        require 'application/views/vehiculo/index.php';
        require 'application/views/_templates/footer.php';
    }

    public function crear()
    {
        $modelo = $this->loadModel('TipoVehiculoModel');
        $tiposVehiculos = $modelo->obtenerTiposVehiculos();

        $modelo = $this->loadModel('PersonalModel');
        $personal = $modelo->obtenerPersonal();

        $modelo = $this->loadModel('EstadoVehiculoModel');
        $estadosVehiculos = $modelo->obtenerEstadosVehiculo();

        require 'application/views/_templates/header.php';
        require 'application/views/vehiculo/crear.php';
        require 'application/views/_templates/footer.php';
    }

    public function crearVehiculo()
    {
        if (isset($_POST['placa']) && isset($_POST['marca']) && isset($_POST['modelo'])
            && isset($_POST['estado']) && isset($_POST['tipo']) && isset($_POST['documentoPersonal'])) {

            $modelo = $this->loadModel('VehiculoModel');
            $modelo->crearVehiculo($_POST['placa'], $_POST['marca'], $_POST['modelo'], $_POST['tipo'], $_POST['documentoPersonal'], $_POST['estado']);
        }

        header('location:' . URL . 'vehiculo/');
    }
}
