<?php



class game_model
{
    private $db;
    
    function __construct()
    {
        // 1. ABRIR LA CONEXION CON LA BASE DE DATOS (DB)
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_esports;charset=utf8','root','');
    }

    function get_games()
    {
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('SELECT * FROM game');
        $query->execute();
        $games=$query->fetchAll(PDO::FETCH_OBJ);
        return $games;
    }

    

}