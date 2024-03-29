<?php
require_once("functions/autoload.php");
?>
<header>


    <!---------------NAV LOGO, SEARCH Y LOGIN---------------->


    <nav class="menu-sup " id="menu-sup">

        <div class="container container-nav-menu-sup">

            <div class="container-search">

                <form action="#" autocomplete="off">
                    <button type="submit"><i id="search-icon" class="fas fa-search"></i></button>
                    <input type="text" name="search" id="search" placeholder="Buscar">
                </form>

            </div>

            <div class="container-logo">
                <a href="home.php">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>

            <div class="container-singin-cart">

                <?php if (loggedIn()) { ?>
                    <div class="singin">
                        <a href="profile.php">
                            <figure class="avatar">
                                <img src="<?= 'avatars/' . $_SESSION['avatar'] ?? 'recursos/img-fixed.jpeg' ?>" alt="">
                            </figure>
                            <span class="title-icon-avatar"><?= $_SESSION['name'] ?? 'Usuario' ?></span>
                        </a>
                    </div>

                    <form class="favorite" action="logout.php" method="POST">
                        <button type="submit">
                            <i id="favorite-icon" class="fas fa-sign-out-alt"></i>
                            <span class="title-icon">Logout</span>
                        </button>
                    </form>
                <?php } else { ?>
                    <div class="singin">
                        <a href="sign-in.php">
                            <i id="singin-icon" class="fas fa-sign-in-alt"></i>
                            <span class="title-icon">Ingresa</span>
                        </a>
                    </div>
                    <div class="favorite">
                        <a href="#">
                            <i id="favorite-icon" class="fas fa-heart"></i>
                            <span class="title-icon">Favorito</span>
                        </a>
                    </div>
                <?php } ?>


                <div class="cart">
                    <a href="cart.php">
                        <i id="cart-icon" class="fas fa-shopping-cart"></i>
                        <span class="title-icon">Carrito</span>
                    </a>

                    <div class="cont-cart">
                        <span id="cant-cart">1</span>
                    </div>

                </div>

            </div>

        </div>

    </nav>



    <!---------------NAV MENU---------------->



    <nav class="menu" id="menu">

        <div class="container container-button-menu">
            <button id="btn-menu-bar" class="btn-menu-bar"><i class="fas fa-bars"></i></button>
            <button id="btn-menu-exit" class="btn-menu-exit"><i class="fas fa-times"></i></button>
        </div>

        <div class="container container-links-nav">
            <div class="btn-categorias" id="btn-categorias">
                <p>Todas las <span>Categorias</span></p>
                <i id="btn-arrow" class="fas fa-caret-down"></i>
            </div>

            <div class="links">
                <a href="#">Ofertas</a>
                <a href="#">Lo mas buscado</a>
                <a href="#">Recomendado</a>
                <a href="#">Vender</a>
                <a href="#">Ayuda</a>
            </div>

        </div>

        <div class="container container-grid">
            <div class="grid " id="grid">
                <div class="container-categorias">

                    <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                    <h3 class="subtitulo">Categorias</h3>
                    <a href="#" data-categoria="tecnologia">Tecnologia <i class="fas fa-angle-right btn-arrow-left"></i></a>
                    <a href="#" data-categoria="libros">Libros <i class="fas fa-angle-right btn-arrow-left"></i></a>
                    <a href="#" data-categoria="ropa">Ropa <i class="fas fa-angle-right btn-arrow-left"></i></a>
                    <a href="#" data-categoria="hogar">Hogar <i class="fas fa-angle-right btn-arrow-left"></i></a>
                    <a href="#" data-categoria="juegos">Juegos <i class="fas fa-angle-right btn-arrow-left"></i></a>
                    <a href="#" data-categoria="salud">Salud <i class="fas fa-angle-right btn-arrow-left"></i></a>
                    <a href="#" data-categoria="alimentos">Alimentos <i class="fas fa-angle-right btn-arrow-left"></i></a>

                </div>

                <div class="container-subcategorias ">
                    <div class="subcategorias active" data-subcategoria="tecnologia">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Tecnologia</h3>
                            <a href="listProduct.php">Laptop</a>
                            <a href="#">Tablets</a>
                            <a href="#">Celulares</a>
                            <a href="#">Computadoras de escritorio</a>
                            <a href="#">Monitores</a>
                            <a href="#">Componentes</a>

                        </div>

                        <div class="banner-subcategoria ">

                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>

                        </div>

                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>

                        </div>

                    </div>

                    <div class="subcategorias" data-subcategoria="libros">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Libros</h3>
                            <a href="#">Negosios e Inversiòn</a>
                            <a href="#">Literatura y Ficciòn</a>
                            <a href="#">Biografias y Memorias</a>
                            <a href="#">Romance</a>
                            <a href="#">Arte y Fotografia</a>
                            <a href="#">Libros para Niños</a>

                        </div>
                        <div class="banner-subcategoria ">

                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>

                        </div>
                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="subcategorias" data-subcategoria="ropa">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Ropa</h3>
                            <a href="#">Negosios e Inversiòn</a>
                            <a href="#">Literatura y Ficciòn</a>
                            <a href="#">Biografias y Memorias</a>
                            <a href="#">Romance</a>
                            <a href="#">Arte y Fotografia</a>
                            <a href="#">Libros para Niños</a>

                        </div>

                        <div class="banner-subcategoria ">

                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>

                        </div>

                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>

                        </div>

                    </div>

                    <div class="subcategorias" data-subcategoria="hogar">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Hogar</h3>
                            <a href="#">Laptop</a>
                            <a href="#">Tablets</a>
                            <a href="#">Celulares</a>
                            <a href="#">Computadoras de escritorio</a>
                            <a href="#">Monitores</a>
                            <a href="#">Componentes</a>

                        </div>

                        <div class="banner-subcategoria ">
                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>
                        </div>

                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="subcategorias" data-subcategoria="juegos">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Juegos</h3>
                            <a href="#">Laptop</a>
                            <a href="#">Tablets</a>
                            <a href="#">Celulares</a>
                            <a href="#">Computadoras de escritorio</a>
                            <a href="#">Monitores</a>
                            <a href="#">Componentes</a>

                        </div>

                        <div class="banner-subcategoria ">

                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>

                        </div>

                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="subcategorias" data-subcategoria="salud">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Salud</h3>
                            <a href="#">Laptop</a>
                            <a href="#">Tablets</a>
                            <a href="#">Celulares</a>
                            <a href="#">Computadoras de escritorio</a>
                            <a href="#">Monitores</a>
                            <a href="#">Componentes</a>

                        </div>

                        <div class="banner-subcategoria ">
                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>
                        </div>

                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>

                        </div>

                    </div>
                    <div class="subcategorias" data-subcategoria="alimentos">

                        <div class="link-subcategoria">

                            <button class="btn-back"><i id="btn-back" class="fas fa-arrow-left"></i> Atras</button>
                            <h3 class="subtitulo">Alimentos</h3>
                            <a href="#">Laptop</a>
                            <a href="#">Tablets</a>
                            <a href="#">Celulares</a>
                            <a href="#">Computadoras de escritorio</a>
                            <a href="#">Monitores</a>
                            <a href="#">Componentes</a>

                        </div>

                        <div class="banner-subcategoria ">

                            <a href="">
                                <img src="img/nav/banner/tecnologia" alt="">
                            </a>

                        </div>

                        <div class="galeria-subcategoria">

                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-2.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="img/nav/galeria/tecnologia-4.jpg" alt="">
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </nav>

</header>