<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beltin Studios</title>
 <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<!--CSS-->
<link rel="stylesheet" href="style.css">
<!--Font Alegreya-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&display=swap">
<!--scripts-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <?php
    include_once '../lib/helpers.php';
 ?>
  </head>
  <body>
    <!--sing up-->
<div style="color: #ffffff;">  <a href="<?php echo getUrl('Login','Login','getLogin'); ?>" class="sing-up">Ingresar<i class="fas fa-angle-double-right"></i> </a></div>
<div class="form" id="capa1">
  <div class="tab-header">
    <div class="active">Regístrate</div>
    <div>Inicia sesión</div>
  </div>
  <form action="registrar.php" method="POST">
  <div class="tab-content">
    <div class="tab-body active">
      <div class="form-element">
        <input type="text" name="email" placeholder="Email">
      </div>
      <div class="form-element">
        <input type="text" name="nombreUsuario" placeholder="Nombre de usuario">
      </div>
      <div class="form-element">
        <input type="password" name="password" placeholder="Contraseña">
      </div>
      <div class="form-element">
        <button>Crear cuenta</button>
      </div>
    </div>
</form>
    <div class="tab-body">
      <form action="ingresar.php" method="POST">
      <div class="form-element">
        <input type="text" name= "email" placeholder="Email">
      </div>
      <div class="form-element">
        <input type="password" name="password" placeholder="Contraseña">
      </div>
      <div class="form-element">
        <input type="checkbox" id="remember_me">
        <label for="remember_me">Recordarme</label>
      </div>
      <div class="form-element">
        <button>Ingresar</button>
      </div>
    </div>
</form>
  </div>
</div>

<!--barras-->
     <div class="menu-btm" id="capa1">
       <i class="fas fa-bars fa-2x"></i>
     </div>

     <div class="container">
       <!--navigation-->
       <nav class="belt-main">
         <!--logo-->
         <img src="img/logcog/logo.png" class="logo-belt">
         <!--navigation right-->
    <ul class="Beltin-menu">
      <li>
           <a href="index.html">Inicio</a>
      </li>
      <li>
           <a href="foro.html">Foro</a>
      </li>
      <li>
           <a href="clases.html">Clases</a>
      </li>
      <li>
           <a href="#">Boletin</a>
      </li>
      <li>
           <a href="#">Acerca de</a>
      </li>
    </ul>

       </nav>
<hr>

<div class="slide-wrap">
  <ul class="slider">
    <li><img src="img/forum/image.jpg" class="slider-uno"></li>
    <li><img src="img/forum/image2.jpg" class="slider-dos"></li>
  </ul>
</div>

<!--Showcase-->
<div class="news-imgs">
  <div>
    <img src="img/¿Donde....jpg" class="news1">
    <h3>¡Encuentranos!</h3>
<p>Estamos ubicados en Valle del cauca, Cali, Desepaz.
</p>
<div style="color: #ffffff;"><h4 class="btm"><a href="https://www.google.com/maps/search/?api=1&query=3.427274465000039,-76.46327642299997">Abrir mapa <i class="fas fa-angle-double-right"></i></a></h4></div>


  </div>
  <div>
    <img src="img/fechas-prueba-icfes-saber-once.jpg" class="news2">
    <h3>Pruebas icfes saber 11°.</h3>
<p>Debido a la pandemia, el icfes se vio aplazado y obligado a cambiar su manera de realizarse...
</p>
<div style="color: #ffffff;"<h4 class="btm"><a href="https://ingresealau.edu.co/noticias/fechas-inscripcion-pruebas-icfes-11-2020/#:~:text=El%20Instituto%20Colombiano%20para%20la,18%20de%20Octubre%20de%202020.&text=Las%20inscripciones%20a%20TODAS%20las,www.icfes.gov.co">Leer más <i class="fas fa-angle-double-right"></i></h4></a></div>


  </div>
  <div>
    <img src="img/10.jpeg" class="news3">
    <h3>Expo-ciencia.</h3>
<p>El link se encontrara en el banner que está abajo de esta sección.
</p>
  </div>
  <div>
    <img src="img/11.jpeg" class="news4">
    <h3>Lorem, ipsum dolor.</h3>
<p>"En este espacio se insertarán noticias proximamente :)"
</p>


  </div>
</div>
<!--banner-->

<section class="banner2">
  <div class="content">
   <h2>Inauguración expociencia.</h2>
    <p>Visita el canal de YouTube de nuestra institucion donde encontraras todos los proyectos en videos de aproximadamente 5 minutos.</p>
  <div style="color: #ffffff;" <h4 class="btm">  <a href="https://meet.google.com/linkredirect?authuser=1&dest=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCA21ONOoiIC4EETxY7OiwEw">Ir allá <i class="fas fa-angle-double-right"></i> </a></h4> </div>
  </div>
</section>



<section class="social">
  <p>Follow Beltin</p>
  <div class="links">
    <a href="https://m.facebook.com/Beltin-Studios-114789550380244/">
    <i class="fab fa-facebook"></i>
   </a>
   <a href="https://twitter.com/BeltinStudios"> <i class="fab fa-twitter"></i>
   </a>
   <a href="https://www.instagram.com/Beltin_oficial1/"> <i class="fab fa-instagram"></i> </a>
  </div>

</section>

     </div>

<div class="footer-links">
  <div class="footer-container">
    <ul>
      <li>
        <a href="#">
          <h3>Title one</h3>
        </a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
    </ul>
    <ul>
      <li>
        <a href="#">
          <h3>Title one</h3>
        </a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
    </ul>
    <ul>
      <li>
        <a href="#">
          <h3>Title one</h3>
        </a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
    </ul>
    <ul>
      <li>
        <a href="#">
          <h3>Title one</h3>
        </a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
      <li>
        <a href="#">Beltin</a>
      </li>
    </ul>

  </div>

</div>

<footer class="footer">
<h3>Beltin Copyright</h3> </footer>

     <script>
         $(document).ready(function(){
           $('.slider').bxSlider();
         });
         $(document).ready(function(){
           $('.slider').bxSlider();
         });
       </script>

       <!--scrollreveal-->
       <script src="https://unpkg.com/scrollreveal"></script>

<script src="main.js">

</script>

      </body>
</html>