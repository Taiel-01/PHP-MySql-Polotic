<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar y Revisar</title>
</head>
<body>
    <center><h1>Agenda Taller</h1></center>
    <form method="POST" action="index.php">

        <div class="form-group">
            <input type="text" name="dominio" class="form-control" id="dominio"placeholder=Dominio>
        </div>

        <div class="form-group">
            <input type="text" name="vehiculo" class="form-control" id="vehiculo" placeholder=vehiculo >
        </div>

        <div class="form-group">
            <input type="text" name="nombre" class="form-control" id="nombre"placeholder=Nombre >
        </div>

        <div class="form-group">
            <input type="number" name="tel" class="form-control" id="tel" placeholder=N°Contacto >
        </div>

        <div class="form-group">
            <textarea name="detalle" class="form-control" id="detalle" placeholder="Detalles" ></textarea>
        </div>

        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
    </form>

    <?php
        if(isset($_POST['btn1'])){

            include("abrir_conexion.php");

            $dominio = $_POST['dominio'];
            $vehiculo = $_POST['vehiculo'];
            $nombre= $_POST['nombre'];
            $tel = $_POST['tel'];
            $detalle = $_POST['detalle'];

            if(mysqli_query($conexion, "INSERT INTO guardar (dominio,vehiculo,nombre,tel,detalle) values ('$dominio','$vehiculo','$nombre','$tel','$detalle')")){
                echo "Se insertaron Correctamente";
            } else {
                echo "Hubo un error";
            }
            
            include("cerrar_conexion.php");
        } 
    ?>
</body>
</html>









