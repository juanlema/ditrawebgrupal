<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/8/2019
 * Time: 8:35 AM
 */

class TipoVehiculoModel
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('La conexión a la base de datos no se pudo establecer.');
        }
    }

    public function obtenerTiposVehiculos()
    {
        $sql = "SELECT ID_Tipo_Vehiculo, Descripcion FROM tipo_vehiculo";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
