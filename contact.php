<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("partials/meta.php") ?>
    <title>Contacto</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/contact.css">
</head>

<body>

    <?php include_once("partials/header.php") ?>

    <main class="container">
        <section class="contain-coment">
            <h2>Contacto</h2>
            <h4>¿Eres un cliente que necesita ayuda? Póngase en contacto con nosotros.</h4>
            <p>Negocios + Asociaciones: <a href="mailto:press@dezt.com">press@dezt.com</a></p>
            <form action="" id="form-contact">
                <label class="label-contact-name" for="name">Nombre </label>
                <div class="name">
                    <input class="input-contact" type="text" name="name" id="name" autocomplete="off" placeholder="Ingresá tu nombre" required>
                    <div id="icon-name">
                        <i class="far fa-user"></i></i>
                    </div>
                </div>
                <label class="label-contact-email" for="email">Email </label>
                <div class="email">
                    <input class="input-contact" type="email" name="email" id="email" autocomplete="off" placeholder="Ingresá tu email" required>
                    <div id="icon-email">
                        <i class="far fa-envelope"></i>
                    </div>
                </div>
                <label for="cometario">Comentario </label>
                <div class="coment">
                    <textarea class="input-contact" name="cometario" id="comentario" cols="30" rows="10" placeholder="Ingresà tu comentario"></textarea>
                    <div id="icon-coment">
                        <i class="fas fa-comments"></i>
                    </div>
                </div>
            </form>

            <div class="ubicacion">
                <h2>Nos puedes encontrar en:</h2>
                <p>Lima 1111</p>
                <p>CABA - Argentina</p>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494247715!2d-58.3837838847699!3d-34.62107608045505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568706938955!5m2!1ses-419!2sar" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

            </div>
        </section>


    </main>

    <?php include_once("partials/footer.php") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>
    <script src="scripts/script-header.js"></script>
</body>

</html>