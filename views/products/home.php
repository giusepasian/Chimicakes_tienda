<?php
require '../partials/head.php';
?>
    
<!--header section starts-->
<?php
require '../partials/header.php';
?>
<!--header section ends-->

<!--home section starts-->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(../../imagenes/3.jpg) no-repeat">
                <div class="content">
                    <h3>CHIMU CAKES</h3>
                    <a href="package.php" class="btn">DISEÑOS</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(../../imagenes/slider_2.jpg) no-repeat">
                <div class="content">
                    <h3>CONOCE NUESTROS DISEÑOS</h3>
                    <a href="package.php" class="btn">DISEÑOS</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>

<!--home section ends-->

<!--services section starts-->

<section class="services">

    <h1 class="heading-title"> servicios </h1>

    <div class="box-container">

        <div class="box">
            <a href="package.php" target="_blank"><img src="../../imagenes/iconos/torta.png"></a>
            <h3>Tortas</h3>
        </div>

        <div class="box">
            <a href="book.php" target="_blank"><img src="../../imagenes/iconos/pedido-online.png"></a>
            <h3>Pedido</h3>
        </div>

    </div>

</section>

<!--services section ends-->

<!--home about section starts-->
<section class="home-about">
    <div class="image">
        <img src="../../imagenes/home_inicio.jpg" alt="">
    </div>
    <div class="content">
        <h3>About us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi officia rem iusto praesentium vitae reprehenderit molestiae quod excepturi repudiandae explicabo aspernatur molestias asperiores velit necessitatibus hic, minima ex! Cupiditate, ducimus.</p>
        <a href="about.php" class="btn">+ información</a>
</section>
<!--home about section ends-->

<!--home packages section starts-->
<section class="home-packages">

    <h1 class="heading-title">Galeria</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="../../imagenes/tortas/torta_1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Torta ejemplo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat magnam incidunt blanditiis dolores iusto consequuntur natus repellat exercitationem architecto iure possimus modi animi, repellendus odio ex ab, maxime delectus fugit!</p>
                <a href="book.php" class="btn">Pedir Ya</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../../imagenes/tortas/torta_2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Torta ejemplo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat magnam incidunt blanditiis dolores iusto consequuntur natus repellat exercitationem architecto iure possimus modi animi, repellendus odio ex ab, maxime delectus fugit!</p>
                <a href="book.php" class="btn">Pedir Ya</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../../imagenes/tortas/torta_6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Torta ejemplo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat magnam incidunt blanditiis dolores iusto consequuntur natus repellat exercitationem architecto iure possimus modi animi, repellendus odio ex ab, maxime delectus fugit!</p>
                <a href="book.php" class="btn">Pedir Ya</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">Otros diseños</a></div>
</section>
<!--home packages section ends-->

<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>10% off</h3>
        <p> Para todos los cumplañeros, solo tenes que pedir con 48hs de anticipacion </p>
        <a href="book.php" class="btn">PEDIR YA</a>
    </div>
</section>
<!--home offer section ends-->



<!--footer section starts-->
<?php
require '../partials/footer.php';
?>
<!--footer section ends-->

<!--swiper js link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.0/swiper-bundle.min.js"></script>
<!--custom js file link-->
<script src="../../script.js"></script>
</body>
</html>