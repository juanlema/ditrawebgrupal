<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo.
 * Date: 6/8/2019
 * Time: 8:09 AM
 */

class VehiculoModel
{
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('La conexión con la base de datos no se ha podido establecer.');
        }
    }

    public function obtenerVehiculos()
    {
        $sql = "SELECT V.*, T.Descripcion, P.Nombre_Completo, E.Descripcion Nombre_Estado FROM vehiculo V INNER JOIN tipo_vehiculo T ON V.ID_Tipo_Vehiculo = T.ID_Tipo_Vehiculo INNER JOIN personal P ON V.Personal_Documento = P.Documento INNER JOIN estado_vehiculo E ON V.ID_Estado = E.ID_Estado_Vehiculo";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function crearVehiculo($placa, $marca, $modelo, $idTipoVehiculo, $personalDocumento, $idEstado){
        $placa = strip_tags($placa);
        $marca = strip_tags($marca);
        $modelo = strip_tags($modelo);
        $idTipoVehiculo = strip_tags($idTipoVehiculo);
        $personalDocumento = strip_tags($personalDocumento);
        $idEstado = strip_tags($idEstado);

        $sql = "INSERT INTO vehiculo VALUES (:Placa, :Marca, :Modelo, :ID_Tipo_Vehiculo, :Personal_Documento, :ID_Estado)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':Placa' => $placa, ':Marca' => $marca, ':Modelo' => $modelo, ':ID_Tipo_Vehiculo' => $idTipoVehiculo, ':Personal_Documento' => $personalDocumento, ':ID_Estado' => $idEstado));
    }
}
