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

    function insert_game($name_game, $description_game, $genre_id){                //Funcion que inserta un juego nuevo (se le pasan tres parametros, name, description y genre)
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('INSERT INTO game (name_game, description_game, genre_id) VALUES (?,?,?)');
        $query -> execute(array($name_game, $description_game, $genre_id));
        
    }
    
    function delete_game($id_game){                                      //Funcion que elimina un juego (se le pasa un parametro, id)
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('DELETE FROM game WHERE id_game = ?');
        $query -> execute(array($id_game));

    }

    function get_games_by_genre($genre){
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)        //Funcion que obtiene todos los juegos de un genero en particular
        $query = $this->db->prepare('SELECT * FROM game WHERE genre_id = ?');
        $query->execute(array($genre));
        $games=$query->fetchAll(PDO::FETCH_OBJ);
        return $games;
    }

    function update_game($id_game, $name_game, $description_game, $genre_id){          //Funcion que modifica un juego ya cargado. Se le pasan los cuatro parametros.

    }                              
    

}