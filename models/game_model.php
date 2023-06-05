<?php

class game_model{
    
    private $db;
    
    function __construct(){
        // 1. ABRIR LA CONEXION CON LA BASE DE DATOS (DB)
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_esports;charset=utf8','root','');
    }

    function get_games(){
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)        //Funcion que obtiene todos los juegos
        $query = $this->db->prepare('SELECT * FROM game join genre on game.genre_id=genre.id_genre');
        $query->execute();
        $games=$query->fetchAll(PDO::FETCH_OBJ);
        return $games;
    }

    function insert_game($name_game, $description_game){                //Funcion que inserta un juego nuevo (se le pasan dos parametros, name y description)
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('INSERT INTO game (name_game, description_game) VALUES (?,?)');
        $query -> execute(array($name_game, $description_game));
        
    }
    
    function delete_game($id_game){                                      //Funcion que elimina un juego (se le pasa un parametro, id)
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('DELETE FROM game WHERE id = ?');
        $query -> execute(array($id_game));

    }

                                  // FALTA LA FUNCION PARA MODIFICAR UN JUEGO
    

}