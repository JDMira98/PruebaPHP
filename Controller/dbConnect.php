<?php

class ConexionDB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "pruebaphp";
    private $conn;

    public function __construct(){
         $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
    }
    // Método para establecer la conexión
    public function openDB() {
        
        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
        echo '<script>';
        echo 'console.log("Conexión exitosa")';
        echo '</script>';
        return  $this->conn;
    }

    // Método para cerrar la conexión
    public function closeDB() {
        $this->conn->close();
    }

    public function Query($sql){
        $this->openDB();
       return  $this->conn->query($sql);
    }
}


?>