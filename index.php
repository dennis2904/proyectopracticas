<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo"> <img src="https://us.123rf.com/450wm/yuliaterentyeva/yuliaterentyeva1505/yuliaterentyeva150500140/42030880-jugador-de-f%C3%BAtbol-con-la-bola-y-el-n%C3%BAmero-en-una-camiseta.jpg?ver=6" alt=""> </div>
        <div class="text-center mt-4 name">SOCIAL SOCCER</div>

       <?php
       session_start();
       if(isset(
           $_SESSION ['success']
       )){
       ?>
            <div style="border-left: 3px solid green; background-color:rgba(29, 175, 0, 0.357); color:green; padding:10px; margin:10px 0 10px 0;">
                <p> <?php echo  $_SESSION ['success']?></p>
            </div>
    <?php 
            unset( $_SESSION ['success']);
       }else if(isset(
        $_SESSION['login_error'] 
        )) {
        ?>
        <div style="border-left: 3px solid red; background-color: rgba(175, 12, 0, 0.357); color:red; padding:10px; margin:10px 0 10px 0;">
                <p><?php echo $_SESSION['login_error']; ?>
                </p>
            </div>
            <?php
            unset($_SESSION['login_error']);
        }
        ?>

        <form class="p-3 mt-3" method="POST" action="controler/login/login.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Usuario" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>

            <input class="input" type="submit" name="submit" value="Entrar">

        </form>
        <div class="text-center fs-6"> ¿NO TIENES CUENTA? <a href="register.php">Registrate</a> </div>
    </div>
</body>

</html>