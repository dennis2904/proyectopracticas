<?php    
if (isset($_POST["submit"]) && !empty($_POST["submit"])) {

    $host = "http://localhost:4000/users/";

    $url = $host . "authenticate";

    // Los datos de formulario
    $datos = [
        "username" => $_POST['username'],
        "password" => $_POST['password'],
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
    $user = (array) json_decode($resultado);

    session_start();
    if ($resultado === false) {

        $_SESSION['login_error'] = "Inicio de sesión incorrecto";

        header('Location: http://'.$_SERVER['SERVER_NAME'].'/Proyecto-Practicas');
        
    }else{

        //$_SESSION['auth_email']= $user['email'];
        //$_SESSION['auth_name']= $user['name'];
        //$_SESSION['auth_last_name']= $user['last_name'];
        //$_SESSION['auth_creation_date']= $user['creation_date'];
        //$_SESSION['auth_password']= $user['password'];

        header('Location: http://localhost/Proyecto-Practicas/inicio.php');
    }

}
?>
   
