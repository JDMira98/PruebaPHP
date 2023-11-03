<?php
require_once("dbConnect.php");
require_once("../Model/formModel.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $servicio = $_POST["servicio"];

    // Aquí puedes usar los valores como necesites, por ejemplo, creando un objeto de la clase Request
    $request = new Request("0", $nombre . " " .$apellido, $servicio, $correo, $telefono, $mensaje);
    $Controller = new formController();
    // Llamar al método para insertar en la base de datos
    $Controller->AddRequest($request);
}
class formController {


public function AddRequest($Request){
     $conn = new ConexionDB();

 $sql = "INSERT INTO users (fullname, service, email, phone, message) VALUES ('$Request->name', '$Request->service', '$Request->email', '$Request->phone', '$Request->message')";
        if ($conn->Query($sql) === TRUE) {
        $conn->closeDB();
         echo '<script>';
         echo 'window.alert("Registrado con éxito")';
        echo '</script>';
        
        echo '<script>';
         echo 'window.location.href = "../form.php"';
        echo '</script>';
        } else {
             echo '<script>';
        echo 'console.log("Error: " . $sql . "<br>" . $conn->error;)';
        echo '</script>';
            
        }

        
        
        exit();
    }
}
?>