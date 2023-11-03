
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <!-- Agrega enlaces a tus archivos CSS aquí -->
    <link rel="stylesheet" type="text/css" href="./CSS/css.css">  
</head>
<style>
/* Estilos para la notificación emergente */
#notification {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #f8f9fa;
  border: 1px solid #ced4da;
  padding: 15px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
</style>
<body class="body">

<header>
<?php include("header.php");
?>
</header>



    <div  class="container">
        <h2>Solicitud Rápida</h2>
        <p style="margin-bottom: 50px; "class="text-muted">Llena tu pre-solicitud ahora!</p>
        <form  class="col-md-10" action="./Controller/formController.php" method="post">
            <div style="padding: 20px;
    border-top: 3px solid #ddd;" class="col-md-8">
                <label for="dropdown">Selecciona un servicio:</label>
                <select class="form-control" name="servicio">
                    <option>Planes Médicos</option>
                    <option>Plan Dental</option>
                    <option>Pólizas de Cáncer</option>
                    <option>Seguros de Vida</option>
                    <option>Planes Advantage</option>
                </select>
            </div>
            <div class="col-md-12">
            <div class="row">

             <div class="col-md-4">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="col-md-4">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            </div>
            </div>
           
            <div class="col-md-8">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-8">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono">
            </div>
            <div style="padding: 20px;  border-bottom: 3px solid #ddd;" class="col-md-8" >
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" rows="5" name="mensaje"></textarea>

                <div  style="margin-top: 20px; "  class="text-center">
                <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
            </div>
            </div>
    </form>
    </div>

    <!-- Agregar enlaces a los scripts de Bootstrap y jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <footer>
       <?php include("footer.php"); ?>
    </footer>

<!-- Aquí continúa el contenido del cuerpo de tu página -->

</body>
</html>
