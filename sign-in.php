<?php 
require_once('functions/autoload.php');


if(isset($_COOKIE['email'])){
    $_SESSION['email'] =  $_COOKIE['email'];

}

 if (loggedIn()){
     header('location: profile.php');
}


if ($_POST) {
    $email = $_POST['email'];
    $error = validationLogin($_POST);
    if (empty($error)) {

        $error['login'] = logged($_POST);
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once("partials/meta.php") ?>
    <title>Iniciar Sesion En Dazt</title>
    <link rel="stylesheet" href="styles/sign-in.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>

    <main class="main">
        <section class="container-form container">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <h2 class="titulo">Iniciar sesión en <a href="home.php">Dazt</a></h2>
            <form action="sign-in.php" method="POST" id="form-sign-in">

                <P class="error"><?= $error['login'] ?? '' ?></P>
                <div class="email">
                    <label class="label-email" for="email">Nombre de usuario o dirección de correo electrónico
                    </label> <br>
                    <p class="error"><?= $error['email'] ?? ' ' ?></p>
                    <input class="input-sign" type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="<?=$email ?? ''?>">
                    <div id="icon-email">
                        <i class="far fa-envelope"></i>
                    </div>
                </div>

                <div class="password">
                    <div class="container-label">
                        <label class="label-password" for="password">Contraseña</label> <span class="olvidado"><a href="#">¿Olvidó su contraseña?</a></span>
                    </div>
                    <p class="error"><?= $error['password'] ?? ' ' ?></p>
                    <input class="input-sign" type="password" name="password" id="password" placeholder="Password" >
                    <div id="icon-pass">
                        <i class="fas fa-key"></i>
                    </div>
                </div>

                <div class="recuerdame">
                    <input type="checkbox" name="recuerdame" id="recuerdame" checked>
                    <label for="recuerdame">Mantener session</label>
                </div>

                <div class="container-btn-sign-in">

                    <!-- <p class="advertencia">La conbinación ingresada de email y contraseña no es válida </p> -->
                    <button id="btn-sign-in">Ingresar</button>
                    <p class="advertencia"> Al ingresar, acepto los<a href="#"> Términos y condiciones</a> y las <a href="">Políticas de privacidad</a> de Dazt.</p>

                </div>

            </form>
            <div class="sign-up">
                <p>¿No tienes una cuenta en Dazt?</p>
                <button id="btn-sign-up" onclick="window.location.href='sign-up.php'">Crear cuenta</button>

            </div>


        </section>

    </main>

    <footer>
        <div class="footer-sign-in">
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">F.Q.A</a></li>
                <li><a href="#">Empresa</a></li>
                <li><a href="#">Devoluciones y reenplazo</a></li>
                <li><a href="#">Politica y Pivacidad </a> </li>
            </ul>
        </div>
        <div class="copy">
            <p>Copyright © <strong><a href="#">David fabian</a> </strong>2019</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>
</body>

</html>