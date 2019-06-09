<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Sotelo
 * Date: 6/7/2019
 * Time: 11:01 AM
 */

class PersonalModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('La conexión a la base de datos no se pudo establecer.');
        }
    }

    public function obtenerPersonal()
    {
        $sql = "SELECT Documento, Nombre_Completo, Correo FROM personal";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function crearPersonal($documento, $nombreCompleto, $correo)
    {
        $documento = strip_tags($documento);
        $nombreCompleto = strip_tags($nombreCompleto);
        $correo = strip_tags($correo);

        $sql = "INSERT INTO personal (Documento, Nombre_Completo, Correo) VALUES (:Documento, :Nombre_Completo, :Correo)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':Documento' => $documento, ':Nombre_Completo' => $nombreCompleto, ':Correo' => $correo));
    }

    public function eliminarPersonal($documento){
        $documento = strip_tags($documento);

        $sql = "DELETE FROM personal WHERE Documento = :Documento";
        $query = $this->db->prepare($sql);
        $query->execute(array(':Documento' => $documento));
    }
}
