<?php 
require_once("functions/autoload.php");

if(isset($_COOKIE['email'])){
    $_SESSION['email'] =  $_COOKIE['email'];
    
}
 

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once("partials/meta.php") ?>
    <title>F.A.Q</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/faq.css">
</head>

<body>

    <?php include_once("partials/header.php") ?>

    <main class="container">
        <div class="faq-title">
            <h2>F.A.Q</h2>

        </div>
        <div class="indice-faq">
            <a href="#qestion1">
                <h4>1. I haven’t received a confirmation email on my order?</h4>
            </a>
            <a href="#qestion2">
                <h4>2. Is international shipping free?</h4>
            </a>
            <a href="#qestion3">
                <h4>3. How long does it take to receive my order?</h4>
            </a>
            <a href="#qestion4">
                <h4>4. Will I have to pay any additional fees for the arrival of my order?</h4>
            </a>
            <a href="#qestion5">
                <h4>5. How do I track my order?</h4>
            </a>
            <a href="#qestion6">
                <h4>6. Are you able to deliver my order to a non-residential address?</h4>
            </a>
            <a href="#qestion7">
                <h4>7. Do you ship to my country? </h4>
            </a>
            <a href="#qestion8">
                <h4>8. Can I change my order after it is completed?</h4>
            </a>
            <a href="#qestion9">
                <h4>9. How do I return a product?</h4>
            </a>
            <a href="#qestion10">
                <h4>10. How long will it take to get my money back after a return?</h4>
            </a>
            <a href="#qestion11">
                <h4>11. My packaging or product is defective, what should I do?</h4>
            </a>
            <a href="#qestion12">
                <h4>12. Can I change my product for another?</h4>
            </a>
            <a href="#qestion13">
                <h4>13. Can you service or repair my watch?</h4>
            </a>
            <a href="#qestion14">
                <h4>14. How do I change my watch strap?</h4>
            </a>
            <a href="#qestion15">
                <h4>15. How do I clean my leather strap?</h4>
            </a>
            <a href="#qestion16">
                <h4>16. What methods of payment do you offer?</h4>
            </a>
            <a href="#qestion17">
                <h4>17. Can I expect the color of my product to look the same in reality as in the pictures?</h4>
            </a>
            <a href="#qestion18">
                <h4>18. Are your watches waterproof?</h4>
            </a>
            <a href="#qestion19">
                <h4>19. How do I find out about your latest updates?</h4>
            </a>
        </div>
        <section class="container-faqs">
            <h4 class="container subtitulo">ANSWERS</h4>
            <article id="qestion1">
                <div class="quest">
                    <h3>01. I haven’t received a confirmation email on my order?</h3>
                </div>
                <div class="reply">
                    <p>If payment has been taken from your account, your order has been accepted. Check your spam folder for a confirmation email, and if you still cannot find it, contact our customer support via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion2">
                <div class="quest">
                    <h3>02. Is international shipping free?</h3>
                </div>
                <div class="reply">
                    <p>Yes, worldwide shipping with UPS/FedEx is free for all orders from www.verkwatches.com.</p>
                </div>
            </article>
            <article id="qestion3">
                <div class="quest">
                    <h3>03. How long does it take to receive my order?</h3>
                </div>
                <div class="reply">
                    <p>We aim to process and dispatch all orders within one working day of verification. Our couriers (UPS/FedEx) pledge worldwide delivery within 5 working days but that could vary depending on whether or not you live in the EU, as well as public holidays. In areas where our couriers do not deliver we reserve the right to use alternative shipping methods.

                        Please note that orders of straps or mesh bands are sent using a different shipping service that does not offer tracking, and has an estimated delivery time of 5-14 working days.

                        For queries about shipping, delivery times or transportation, contact us via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion4">
                <div class="quest">
                    <h3>04. Will I have to pay any additional fees for the arrival of my order?</h3>
                </div>
                <div class="reply">
                    <p>You will not receive any additional fees or taxes on orders shipped to these countries:

                        European Union, United States, United Kingdom, Japan, Canada, Singapore, South Korea, Australia, Switzerland

                        If you live outside of these countries, duties and/or tax import fees are not included and may apply. We are unable to provide information about how much these fees may be, so we recommend you check your regional customs policies. Returns made due to unexpected VAT, duties and/or other import fees will be subject to a 20% restocking fee.</p>
                </div>
            </article>
            <article id="qestion5">
                <div class="quest">
                    <h3>05. I haven’t received a confirmation email on my order?</h3>
                </div>
                <div class="reply">
                    <p>If payment has been taken from your account, your order has been accepted. Check your spam folder for a confirmation email, and if you still cannot find it, contact our customer support via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion6">
                <div class="quest">
                    <h3>06. Is international shipping free?</h3>
                </div>
                <div class="reply">
                    <p>Yes, worldwide shipping with UPS/FedEx is free for all orders from www.verkwatches.com.</p>
                </div>
            </article>
            <article id="qestion7">
                <div class="quest">
                    <h3>07. How long does it take to receive my order?</h3>
                </div>
                <div class="reply">
                    <p>We aim to process and dispatch all orders within one working day of verification. Our couriers (UPS/FedEx) pledge worldwide delivery within 5 working days but that could vary depending on whether or not you live in the EU, as well as public holidays. In areas where our couriers do not deliver we reserve the right to use alternative shipping methods.

                        Please note that orders of straps or mesh bands are sent using a different shipping service that does not offer tracking, and has an estimated delivery time of 5-14 working days.

                        For queries about shipping, delivery times or transportation, contact us via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion8">
                <div class="quest">
                    <h3>08. Will I have to pay any additional fees for the arrival of my order?</h3>
                </div>
                <div class="reply">
                    <p>You will not receive any additional fees or taxes on orders shipped to these countries:

                        European Union, United States, United Kingdom, Japan, Canada, Singapore, South Korea, Australia, Switzerland

                        If you live outside of these countries, duties and/or tax import fees are not included and may apply. We are unable to provide information about how much these fees may be, so we recommend you check your regional customs policies. Returns made due to unexpected VAT, duties and/or other import fees will be subject to a 20% restocking fee.</p>
                </div>
            </article>
            <article id="qestion9">
                <div class="quest">
                    <h3>09. I haven’t received a confirmation email on my order?</h3>
                </div>
                <div class="reply">
                    <p>If payment has been taken from your account, your order has been accepted. Check your spam folder for a confirmation email, and if you still cannot find it, contact our customer support via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion10">
                <div class="quest">
                    <h3>10. Is international shipping free?</h3>
                </div>
                <div class="reply">
                    <p>Yes, worldwide shipping with UPS/FedEx is free for all orders from www.verkwatches.com.</p>
                </div>
            </article>
            <article id="qestion11">
                <div class="quest">
                    <h3>11. How long does it take to receive my order?</h3>
                </div>
                <div class="reply">
                    <p>We aim to process and dispatch all orders within one working day of verification. Our couriers (UPS/FedEx) pledge worldwide delivery within 5 working days but that could vary depending on whether or not you live in the EU, as well as public holidays. In areas where our couriers do not deliver we reserve the right to use alternative shipping methods.

                        Please note that orders of straps or mesh bands are sent using a different shipping service that does not offer tracking, and has an estimated delivery time of 5-14 working days.

                        For queries about shipping, delivery times or transportation, contact us via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion12">
                <div class="quest">
                    <h3>12. Will I have to pay any additional fees for the arrival of my order?</h3>
                </div>
                <div class="reply">
                    <p>You will not receive any additional fees or taxes on orders shipped to these countries:

                        European Union, United States, United Kingdom, Japan, Canada, Singapore, South Korea, Australia, Switzerland

                        If you live outside of these countries, duties and/or tax import fees are not included and may apply. We are unable to provide information about how much these fees may be, so we recommend you check your regional customs policies. Returns made due to unexpected VAT, duties and/or other import fees will be subject to a 20% restocking fee.</p>
                </div>
            </article>
            <article id="qestion13">
                <div class="quest">
                    <h3>13. I haven’t received a confirmation email on my order?</h3>
                </div>
                <div class="reply">
                    <p>If payment has been taken from your account, your order has been accepted. Check your spam folder for a confirmation email, and if you still cannot find it, contact our customer support via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion14">
                <div class="quest">
                    <h3>14. Is international shipping free?</h3>
                </div>
                <div class="reply">
                    <p>Yes, worldwide shipping with UPS/FedEx is free for all orders from www.verkwatches.com.</p>
                </div>
            </article>
            <article id="qestion15">
                <div class="quest">
                    <h3>15. How long does it take to receive my order?</h3>
                </div>
                <div class="reply">
                    <p>We aim to process and dispatch all orders within one working day of verification. Our couriers (UPS/FedEx) pledge worldwide delivery within 5 working days but that could vary depending on whether or not you live in the EU, as well as public holidays. In areas where our couriers do not deliver we reserve the right to use alternative shipping methods.

                        Please note that orders of straps or mesh bands are sent using a different shipping service that does not offer tracking, and has an estimated delivery time of 5-14 working days.

                        For queries about shipping, delivery times or transportation, contact us via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion16">
                <div class="quest">
                    <h3>16. Will I have to pay any additional fees for the arrival of my order?</h3>
                </div>
                <div class="reply">
                    <p>You will not receive any additional fees or taxes on orders shipped to these countries:

                        European Union, United States, United Kingdom, Japan, Canada, Singapore, South Korea, Australia, Switzerland

                        If you live outside of these countries, duties and/or tax import fees are not included and may apply. We are unable to provide information about how much these fees may be, so we recommend you check your regional customs policies. Returns made due to unexpected VAT, duties and/or other import fees will be subject to a 20% restocking fee.</p>
                </div>
            </article>
            <article id="qestion17">
                <div class="quest">
                    <h3>17. I haven’t received a confirmation email on my order?</h3>
                </div>
                <div class="reply">
                    <p>If payment has been taken from your account, your order has been accepted. Check your spam folder for a confirmation email, and if you still cannot find it, contact our customer support via hello@verkstore.com.</p>
                </div>
            </article>
            <article id="qestion18">
                <div class="quest">
                    <h3>18. Is international shipping free?</h3>
                </div>
                <div class="reply">
                    <p>Yes, worldwide shipping with UPS/FedEx is free for all orders from www.verkwatches.com.</p>
                </div>
            </article>
            <article id="qestion19">
                <div class="quest">
                    <h3>19. How long does it take to receive my order?</h3>
                </div>
                <div class="reply">
                    <p>We aim to process and dispatch all orders within one working day of verification. Our couriers (UPS/FedEx) pledge worldwide delivery within 5 working days but that could vary depending on whether or not you live in the EU, as well as public holidays. In areas where our couriers do not deliver we reserve the right to use alternative shipping methods.

                        Please note that orders of straps or mesh bands are sent using a different shipping service that does not offer tracking, and has an estimated delivery time of 5-14 working days.

                        For queries about shipping, delivery times or transportation, contact us via hello@verkstore.com.</p>
                </div>
            </article>

        </section>


    </main>

    <?php include_once("partials/footer.php") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"></script>
    <script src="scripts/script-header.js"></script>
</body>

</html>