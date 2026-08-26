<?php
// Incluye el archivo que contiene la clase DataAccess
include_once('DataAccess.php');

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtiene los datos del formulario
    $tipodonacion = $_POST['tipo_donacion'];
    $nombred = $_POST['nombre'];
    $emaildonador = $_POST['gmail'];
    $telefonod = $_POST['telefono'];

    // Crea una instancia de la clase DataAccess para interactuar con la base de datos
    $dao = new DataAccess();

    // Establece la conexión con la base de datos
    $conn = $dao->connect();

    // Verifica si la conexión se realizó correctamente
    if ($conn) {
        // Prepara la consulta SQL para insertar un nuevo empleado
        $query = "INSERT INTO donadores (tipo_donacion, nombre, gmail, telefono) 
                  VALUES ('$tipodonacion', '$nombred', '$emaildonador', '$telefonod')";

        // Ejecuta la consulta SQL utilizando execQuery
        $result = $dao->execQuery($query);

        // Verifica si la inserción se realizó correctamente
        if ($result) {
            // Redirige a una página de éxito
            header("Location: donadores.blade.php?registrado=1");
            exit();
        } else {
            // Muestra un mensaje de error
            echo "Error al registrar el empleado.";
        }
    } else {
        // Si la conexión no se realizó correctamente, muestra un mensaje de error
        echo "Error al conectar con la base de datos.";
    }
}
?>