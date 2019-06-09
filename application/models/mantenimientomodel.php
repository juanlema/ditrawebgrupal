<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/8/2019
 * Time: 10:59 AM
 */

class MantenimientoModel
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('La conexión a la base de datos no se pudo establecer.');
        }
    }

    public function obtenerMantenimientos()
    {
        $sql = "SELECT ID_Mantenimiento, Descripcion, Fecha_Programado, Placa_Vehiculo FROM mantenimiento";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function crearMantenimiento($descripcion, $fecha, $placa)
    {
        $descripcion = strip_tags($descripcion);
        $fecha = strip_tags($fecha);
        $placa = strip_tags($placa);

        $sql = "INSERT INTO mantenimiento VALUES (DEFAULT, :Descripcion, :Fecha_Programado, :Placa_Vehiculo)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':Descripcion' => $descripcion, ':Fecha_Programado' => $fecha, ':Placa_Vehiculo' => $placa));
    }
}
