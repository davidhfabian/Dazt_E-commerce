<?php
require_once("functions/autoload.php");


if(isset($_COOKIE['email'])){
    $_SESSION['email'] =  $_COOKIE['email'];

}

if (loggedIn()){
    header('location: profile.php');
}

if ($_POST) {
    $error = validationRegister($_POST, $_FILES);

    if (empty($error)) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        $nombreArchivo = subirAvatar($_FILES['avatar'], $email);

        $_SESSION['avatar'] = $nombreArchivo;

        $user = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'avatar' => $nombreArchivo
        ];

        $datos = [
            'team' => 'grupo10',
            'commission' => 'tarde',
            'json_data' => $user,
        ];

        $usuario = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'POST', $datos);

        header('location: profile.php');
    } else {
        // $nombreArchivo = subirAvatar($_FILES['avatar'], $email);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once("partials/meta.php") ?>
    <title>Crear cuenta en Dazt</title>
    <link rel="stylesheet" href="styles/sign-up.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>

    <main class="main">
        <section class="container-form container">
            <section id="login">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                </div>
                <h2 class="titulo">Crear cuenta en <a href="home.php">Dazt</a></h2>
                <form action="sign-up.php" method="POST" enctype="multipart/form-data" id="form-sign-up">
                    <div class="name">
                        <label class="label-sign-up" for="name">Nombre completo </label>
                        <p class="error"><?= $error['name'] ?? ' ' ?></p>
                        <input class="input-sign" type="text" name="name" id="name" autocomplete="off" placeholder="Ingresá tu nombre" value="<?= $_POST['name'] ?? '' ?>">
                        <div id="icon-name">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="surname">
                        <label class="label-sign-up" for="username">Nombre de usuario </label>
                        <p class="error"><?= $error['username'] ?? '' ?></p>
                        <input class="input-sign" type="text" name="username" id="username" autocomplete="off" placeholder="Ingresá tu nombre de usuario" value="<?= $_POST['username'] ?? '' ?>">
                        <div id="icon-surname">
                            <i class="far fa-user"></i></i>
                        </div>
                    </div>
                    <div class="email">
                        <label class="label-sign-up" for="email">Email </label>
                        <p class="error"><?= $error['email'] ?? '' ?></p>
                        <input class="input-sign" type="email" name="email" id="email" autocomplete="off" placeholder="Ingresá tu email" value="<?= $_POST['email'] ?? '' ?>">
                        <div id="icon-email">
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                    <div class="password">
                        <label class="label-sign-up" for="password">Contraseña </label><br>
                        <span class="error"><?= $error['password'] ?? '' ?></span>
                        <input class="input-sign" type="password" name="password" id="password" autocomplete="off" placeholder="Password">
                        <div id="icon-pass">
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                    <div>
                        <p class="error"><?= $error['file'] ?? "" ?></p>
                        <input type="file" name="avatar" placeholder="Avatar">
                    </div>
                    <div class="container-btn-sign-up">
                        <button id="btn-sign-up" type="submit">Registrarme</button>
                        <p class="advertencia"> Al registrarme, declaro que soy mayor de edad y acepto los<a href="#"> Términos y condiciones</a> y las <a href="">Políticas de privacidad</a> de Dazt.</p>
                    </div>

                </form>
                <div class="sign-in">
                    <p>¿ya tienes una cuenta en Dazt?</p>
                    <button id="btn-sign-in" onclick="window.location.href='sign-in.php'">Iniciar sesiòn</button>

                </div>
            </section>

        </section>

    </main>

    <footer>

        <div class="footer-sign-up">
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
    <script src="scripts/script.js"></script>

</body>

</html>