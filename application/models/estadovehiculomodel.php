<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/8/2019
 * Time: 8:40 AM
 */

class EstadoVehiculoModel
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('La conexión a la base de datos no se pudo establecer.');
        }
    }

    public function obtenerEstadosVehiculo()
    {
        $sql = "SELECT ID_Estado_Vehiculo, Descripcion FROM estado_vehiculo";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
