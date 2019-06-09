<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/8/2019
 * Time: 10:31 AM
 */

class RepuestoModel
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('La conexión a la base de datos no se pudo establecer.');
        }
    }

    public function obtenerRepuestos()
    {
        $sql = "SELECT ID_Repuesto, Nombre, Valor FROM repuesto";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function  crearRepuesto($nombre, $valor){
        $nombre = strip_tags($nombre);
        $valor = strip_tags($valor);

        $sql = "INSERT INTO repuesto VALUES(DEFAULT, :Nombre, :Valor)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':Nombre' => $nombre, ':Valor' => $valor));
    }
}
