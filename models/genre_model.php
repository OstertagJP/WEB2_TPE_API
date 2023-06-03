<?php

class genre_model
{
    private $db;
    
    function __construct()
    {
        // 1. ABRIR LA CONEXION CON LA BASE DE DATOS (DB)
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_esports;charset=utf8','root','');
    }

    function get_genre()
    {
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('SELECT * FROM genre');
        $query->execute();
        $genre=$query->fetchAll(PDO::FETCH_OBJ);
        return $genre;
    }
    
}