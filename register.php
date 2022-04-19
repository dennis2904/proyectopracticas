<?php include "controler/login/register.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo"> <img src="https://us.123rf.com/450wm/yuliaterentyeva/yuliaterentyeva1505/yuliaterentyeva150500140/42030880-jugador-de-f%C3%BAtbol-con-la-bola-y-el-n%C3%BAmero-en-una-camiseta.jpg?ver=6" alt=""> </div>
        <div class="text-center mt-4 name"> SOCIAL SOCCER</div>
        <?php
        session_start();
        if (isset(
            $_SESSION['register_error']
        )) { ?>

            <div style="border-left: 3px solid red; background-color: rgba(175, 12, 0, 0.357); color:red; padding:10px; margin:10px 0 10px 0;">
                <p><?php echo $_SESSION['register_error']; ?>
                    <br><strong> Posibles errores: </strong>
                    <br>1. El correo de usuario ya existe.
                    <br>2. Error interno del servidor
                </p>
            </div>

        <?php
            unset($_SESSION['register_error']);
        }
        ?>

        <form class="p-3 mt-3" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="firstName" id="firstName" placeholder="Nombre">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="lastName" id="lastName" placeholder="Apellido">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="username" id="username" placeholder="Usuario">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Contraseña">
            </div>
            
            

            <input class="input" type="submit" name="submit" value="Registrarse">

        </form>
        <div class="text-center">
            <a class="center" href="index.php">Regresar</a>
            <div>
            </div>
        </div>
</body>

</html>