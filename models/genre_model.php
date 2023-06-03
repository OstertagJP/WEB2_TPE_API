<?php

class genre_model{
    
    private $db;
    
    function __construct(){
        // 1. ABRIR LA CONEXION CON LA BASE DE DATOS (DB)
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_esports;charset=utf8','root','');
    }

    function get_genre(){                                                  //Funcion que obtiene todos los generos
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('SELECT * FROM genre');
        $query->execute();
        $genre=$query->fetchAll(PDO::FETCH_OBJ);
        return $genre;
    }

    function insert_genre($name_genre, $description_genre){                //Funcion que inserta un genero nuevo (se le pasan dos parametros, name y description)
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('INSERT INTO genre (name_genre, description_genre) VALUES (?,?)');
        $query -> execute(array($name_genre, $description_genre));
        
    }
    
    function delete_genre($id_genre){                                      //Funcion que elimina un genero (se le pasa un parametro, id)
        // 2. EJECUTAR CONSULTA SQL (2 SUBPASOS: PREPARE Y EXECUTE)
        $query = $this->db->prepare('DELETE FROM genre WHERE id = ?');
        $query -> execute(array($id_genre));

    }

                                  // FALTA LA FUNCION PARA MODIFICAR UN GENERO

}

