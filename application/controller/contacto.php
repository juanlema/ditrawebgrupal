<?php


class Contacto extends Controller
{
    public function index()
    {
        require 'application/views/_templates/header.php';
        require 'application/views/contacto/ubicacion.php';
        require 'application/views/_templates/footer.php';
    }
}
