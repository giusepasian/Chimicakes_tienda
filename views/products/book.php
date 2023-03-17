<?php
require '../partials/head.php';
?>
    
<!--header section starts-->
<?php
require '../partials/header.php';
?>
<!--header section ends-->

<!--booking section starts-->

<section class="booking">

    <h1 class="heading-title"> Realizar un pedido </h1>
        <form action="../form/book_form.php" method="post" class="book-form">
    
            <div class="flex">
                <div class="inputbox">
                    <span>Nombre Completo :</span>
                    <input type="text" placeholder="ingresar nombre completo" name="name" required>
                </div>
                <div class="inputbox">
                    <span>Email :</span>
                    <input type="email" placeholder="ingresar email" name="email" required>
                </div>
                <div class="inputbox">
                    <span>Telefono :</span>
                    <input type="phone" placeholder="ingresar número" name="phone" required>
                </div>
                <div class="inputbox">
                    <span>Direccion :</span>
                    <input type="text" placeholder="ingresar direccion" name="address">
                </div>
                <div class="inputbox">
                    <span>Fecha :</span>
                    <input type="date" name="date">
                </div>
            </div>

            <input type="submit" value="Enviar correo" class="btn" name="send">

        </form>
</section>

<!--booking section ends-->


<!--footer section starts-->
<?php
require '../partials/footer.php';
?>
<!--footer section ends-->

<!--swiper js link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.0/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>
</body>
</html>