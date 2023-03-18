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
        <form id="formulario" class="book-form">
    
            <div class="flex">
                <div class="inputbox box-input">
                    <span>Nombre Completo :</span>
                    <input type="text" id="name" placeholder="ingresar nombre completo" name="name" required>
                </div>
                <div class="inputbox box-input">
                    <span>Email :</span>
                    <input type="email" id="email" placeholder="ingresar email" name="email" required>
                </div>
                <div class="inputbox box-input">
                    <span>Telefono :</span>
                    <input type="phone" id="phone" placeholder="ingresar número" name="phone" required>
                </div>
                <div class="inputbox box-input">
                    <span>Descripcion del pedido :</span>
                    <input type="text" id="description" name="description">
                </div>
            </div>

        </form>
        <button id="submit" type="submit" class="boton"><i class="fab fa-whatsapp"></i> Enviar WhatsApp</button>
</section>

    <script type="text/javascript">
        $(".box-input input").on("focus", function(){
            $(this).addClass("focus");
        });

        $(".box-input input").on("blur", function(){
            if($(this).val() == ""){
                $(this).removeClass("focus");
            }
        });

    </script>

<!--booking section ends-->


<!--footer section starts-->
<?php
    require '../partials/footer.php';
?>
<!--footer section ends-->

<!--swiper js link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.0/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!--custom js file link-->
    <script src="../../js.js"></script>
    <script src="../../script.js"></script>

</body>
</html>