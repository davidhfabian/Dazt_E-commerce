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
                    <form action="" id="form-sign-up">
                        <div class="name">
                            <label class="label-sign-up" for="name">Nombre </label>
                            <input class="input-sign" type="text" name="name" id="name" autocomplete="off" placeholder="Ingresá tu nombre" required>
                            <div id="icon-name">
                                    <i  class="fas fa-user"></i>
                                </div>
                        </div>
                        <div class="surname">
                            <label class="label-sign-up" for="name">Apellido </label>
                            <input class="input-sign" type="text" name="surname" id="surname" autocomplete="off" placeholder="Ingresá tu apellido" required>
                            <div id="icon-surname">
                                    <i class="far fa-user"></i></i>
                                </div>
                        </div>
                        <div class="email" >
                            <label class="label-sign-up" for="email">Email </label>
                            <input class="input-sign" type="email" name="email" id="email" autocomplete="off" placeholder="Ingresá tu email" required>
                            <div id="icon-email">
                                    <i class="far fa-envelope"></i>
                                </div>
                        </div>
                        <div class="password" >
                            <label class="label-sign-up" for="password">Contraseña </label>
                            <input class="input-sign" type="password" name="password" id="password" autocomplete="off" placeholder="Password" required>
                            <div id="icon-pass">
                                    <i  class="fas fa-key"></i>
                                </div>
                        </div>
                        <div class="container-btn-sign-up">
                            <button id="btn-sign-up" type="submit">Registrarme</button>
                            <p class="advertencia"> Al registrarme, declaro que soy mayor de edad y acepto los<a href="#"> Términos y condiciones</a> y las <a href="">Políticas de privacidad</a>  de Dazt.</p>
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