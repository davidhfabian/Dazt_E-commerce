<!DOCTYPE html>
<html lang="es">

<head>
<?php include_once("partials/meta.php") ?>
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/perfil.css">
    <link rel="stylesheet" href="styles/item.css">

</head>

<body>

<?php include_once("partials/header.php") ?>
  
    <!---------------MAIN---------------->
    <main >

        <!---------------MENU---------------->
        <aside class="menu">
            <div class="container-avatar">
                <div class="avatar">
                        <i id="avatar" class="fas fa-user-circle"></i>
                </div>
                <h3>Hola Nameuser!!</h3>
                <p>correo</p>
                
            </div>
            <hr>
            <nav>
                <ul>
                    <li>
                        <a href="#"><i class="fas fa-receipt" style="font-size: 24px; margin: 0px 5px;"></i> Facturacion</a>
                    </li>
                
                
                    <li>
                        <a href="#"><i class="fas fa-shopping-bag" style="font-size: 24px; margin: 0px 5px;"></i> Compras</a>
                    </li>
                
                    <li>
                        <a href="#"><i class="fas fa-gift" style="font-size: 24px; margin: 0px 5px;"></i> Regalos</a>
                    </li>
               
                    <li>
                        <a href="#"><i class="far fa-credit-card" style="font-size: 24px; margin: 0px 5px;"></i> Medios de pago</a>
                    </li>
                
                    <li><a href="#"><i class="fas fa-cog" style="font-size: 24px; margin: 0px 5px;"></i> Configuracion</a></li>
                </ul>
            </nav>
        </aside>

        <!---------------BANNER---------------->

        <figure class="banner">
            <img src="recursos/sliderx.webp" alt="">
        </figure>

        <!---------------FAVORITES--------------->

        <div class="favorite-title">
            <h2>Favoritos <span>| <a href="#">Ver todo</a></span></h2>
        </div>
        <section class="favorite">
            <article class="item">
                <a href="product.php">

                    <figure class="item-img">
                        <img src="img/item/item.jpg" alt="item">
                    </figure>

                    <div class="item-desc">

                        <span class="price">$299</span>
                        <span class="price-after">$500</span>
                        <h5 class="item-title">Apple Macbook Pro 13 Core I5 8gb</h5>

                    </div>

                </a>

                <div class="item-fav">
                    <i class="far fa-heart"></i>
                </div>

                <div class="item-cart">
                    <i class="fas fa-cart-plus"></i>
                </div>

                <div class="item-button">
                    Comprar ya!
                </div>

            </article>
            <article class="item">
                <a href="product.php">

                    <figure class="item-img">
                        <img src="img/item/item.jpg" alt="item">
                    </figure>

                    <div class="item-desc">

                        <span class="price">$299</span>
                        <span class="price-after">$500</span>
                        <h5 class="item-title">Apple Macbook Pro 13 Core I5 8gb</h5>

                    </div>

                </a>

                <div class="item-fav">
                    <i class="far fa-heart"></i>
                </div>

                <div class="item-cart">
                    <i class="fas fa-cart-plus"></i>
                </div>

                <div class="item-button">
                    Comprar ya!
                </div>

            </article>

            <article class="item ">
                <a href="product.php">

                    <figure class="item-img">
                        <img src="img/item/item.jpg" alt="item">
                    </figure>

                    <div class="item-desc">

                        <span class="price">$299</span>
                        <span class="price-after">$500</span>
                        <h5 class="item-title">Apple Macbook Pro 13 Core I5 8gb</h5>

                    </div>

                </a>

                <div class="item-fav">
                    <i class="far fa-heart"></i>
                </div>

                <div class="item-cart">
                    <i class="fas fa-cart-plus"></i>
                </div>

                <div class="item-button">
                    Comprar ya!
                </div>

            </article>

            <article class="item ">

                <a href="product.php">

                    <figure class="item-img">
                        <img src="img/item/item.jpg" alt="item">
                    </figure>

                    <div class="item-desc">

                        <span class="price">$299</span>
                        <span class="price-after">$500</span>
                        <h5 class="item-title">Apple Macbook Pro 13 Core I5 8gb</h5>

                    </div>

                </a>
                <div class="item-fav">
                    <i class="far fa-heart"></i>
                </div>

                <div class="item-cart">
                    <i class="fas fa-cart-plus"></i>
                </div>

                <div class="item-button">
                    Comprar ya!
                </div>
            </article>
        </section>



    </main>

    <?php include_once("partials/footer.php") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>

    <script src="scripts/script-header.js"></script>

</body>


</html>