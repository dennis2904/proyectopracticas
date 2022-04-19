<?php

if (isset($_POST["submit"]) && !empty($_POST["submit"])) {

    $host = "http://localhost:4000/users/";

    $url = $host . "register";

    // Los datos de formulario
    $datos = [
        "firstName" => $_POST['firstName'],
        "lastName" => $_POST['lastName'],
        "username" => $_POST['username'],
        "password" => $_POST['password']
        
    ];

   

    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    session_start();
    if ($resultado === false) {
        $_SESSION['register_error'] = "Hubo un problema con el registro, intentelo de nuevo.";
        header('Location: http://' . $_SERVER['SERVER_NAME'] . '/Proyecto-Practicas/register.php');
    } else {
        $_SESSION['success'] = "Usted se registro correctamente, inicie sesión.";
        header('Location: http://' . $_SERVER['SERVER_NAME'] . '/Proyecto-Practicas');
    }
}
