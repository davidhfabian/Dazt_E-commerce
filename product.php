<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("partials/meta.php") ?>
    <title>Apple Macbook Pro</title>
    <link rel="stylesheet" href="styles/product.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>

    <?php include_once("partials/header.php") ?>

    <main class="main container">
        <section class="product-container container">
            <div class="product-img-container">
                <div class="product-banner">
                    <img src="img/product/apple-macbook-pro-13-core-i5-8gb-ssd-128gb-modelo-2018-color-D_NQ_NP_894367-MLA31600367430_072019-O.webp" alt="">
                </div>
                <div class="product-imgs">
                    <a href="">

                        <img src="img/product/apple-macbook-pro-13-core-i5-8gb-ssd-128gb-modelo-2018-color-D_NQ_NP_894367-MLA31600367430_072019-O.webp" alt="">
                    </a>
                    <a href="">

                        <img src="img/product/product2.webp" alt="">

                    </a>
                    <a href="">

                        <img src="img/product/product3.webp" alt="">

                    </a>
                    <a href="">

                        <img src="img/product/product4.webp" alt="">

                    </a>
                </div>
            </div>
            <div class="product-desc-container">
                <div class="product-title">
                    <h2>Apple Macbook Pro 13 Core I5 8gb</h2>
                </div>
                <div class="price-product">
                    <span class="price">$39</span>
                    <span class="price-out">$99999</span>
                </div>
                <div class="product-description">
                    <div class="product-desc-color">
                        <label for="product-color"> Color: </label>
                        <select name="product-color" id="product-color">
                            <option value="plateado">Plateado</option>
                            <option value="dorado">Dorado</option>
                        </select>
                    </div>

                    <span class="product-desc-cap"></span>
                    <div>
                        <label for="product-cant"> Cantidad: </label>
                        <select name="product-cant" id="product-cant">
                            <option value="1">1 Unidad</option>
                            <option value="2">2 Unidad</option>
                            <option value="3">3 Unidad</option>
                            <option value="4">4 Unidad</option>
                            <option value="5">5 Unidad</option>
                            <option value="6">6 Unidad</option>
                            <option value="7">7 Unidad</option>
                            <option value="8">8 Unidad</option>
                            <option value="9">9 Unidad</option>
                            <option value="10">+ de 9 Unidades</option>
                        </select>
                        <span class="product-stock">(stock: 255 unidades)</span>
                    </div>
                </div>
                <div class="product-btns">
                    <button id="btn-comprar">Comprar ya!</button>
                    <button id="btn-añadir-carrito">Añadir al carrito</button>

                </div>
            </div>
        </section>
    </main>

    <!---------------FOOTER---------------->

    <?php include_once("partials/footer.php") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>
    <script src="scripts/script-header.js"></script>
</body>

</html>