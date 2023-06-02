<?php
session_start();
$email = $_SESSION['email'];
if(!isset($email)){
header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Veterinaria</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- font bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- header section-->

    <header class="header">
      <a href="#" class="logo"> <i class="fas fa-paw">the best pets</i></a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#services">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user" id="login-btn"> 
          <?php 
        echo $email['nombres']; ?>
        </div>
      </div>
      <form class="login-form">
      <h4> 
         <?php 
        echo $email['nombres']," ", $email['apellidos'] ?>
        </h4>
        <h5>
        <?php 
        echo $email['email']; ?>
        </h5>
        <div class="links">
          <a class="btn btn-primary d-block mb-3" href="./controladores/cerrarsesion.php">cerrar sesion</a>
          <a class="btn btn-primary d-block mb-3" href="perfil.php">perfil</a>
        </div>
      </form>
  
    </header>

    <!-- home section -->
    <section class="home" id="home">
      <div class="content">
        <h3><span>Hola!</span>Bienvenido a tu Veterinaria favorita!</h3>
      </div>
      <!--    <img src="image/bottom_wave.png" class="wave" alt="">-->
    </section>

    <!-- about section-->
    <section class="about" id="about">
      <div class="image">
        <img src="image/croquetas.png" alt="" />
      </div>

      <div class="content">
        <h3>premium <span> pet </span></h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
          maxime architecto quaerat magnam repudiandae voluptatum sequi. Magni
          pariatur quos harum minus assumenda quisquam eius a dolorum ipsa,
          expedita non sunt?
        </p>
        <a href="#" class="btn">Mas</a>
      </div>
    </section>

    <!-- dog and cat food banner section-->
    <div class="dog-food">
      <div class="image">
        <img src="image/ComidaDog.png" alt="" />
      </div>
      <div class="content">
        <h3><span>Nupec</span> Comida</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto,
          sapiente architecto rerum doloribus odit a omnis sit consectetur
          maxime minima veritatis vel quaerat non nemo similique. Perspiciatis
          quae animi pariatur.
        </p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="#"> <img src="image/shop_now_dog.png" alt="" /> </a>
      </div>
    </div>
    <div class="cat-food">
      <div class="content">
        <h3><span>air dried</span> cat comida</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem eaque
          possimus iure debitis vitae voluptatum quis, nesciunt perferendis
          cumque. Odit dolor voluptatibus itaque culpa quasi voluptates, at
          error. At, sint.
        </p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="#"> <img src="image/shop_now_cat.png" alt="" /> </a>
      </div>
      <div class="image">
        <img src="image/cat_food.png" alt="" />
      </div>
    </div>

    <!-- shop section -->
    <section class="shop" id="shop">
      <h1 class="heading">Otros <span>Productos</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/producto1.png" alt="" />
          </div>
          <div class="content">
            <h3>Royal Canin Maxi Adult</h3>
            <div class="amount">$15.00 - $30.00</div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/producto2.png" alt="" />
          </div>
          <div class="content">
            <h3>Hill's Science Diet Puppy</h3>
            <div class="amount">$15.00 - $30.00</div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/producto3.png" alt="" />
          </div>
          <div class="content">
            <h3>Purina Pro Plan Savor</h3>
            <div class="amount">$15.00 - $30.00</div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/producto4.png" alt="" />
          </div>
          <div class="content">
            <h3>Royal Canin Maxi Adult</h3>
            <div class="amount">$15.00 - $30.00</div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/producto5.png" alt="" />
          </div>
          <div class="content">
            <h3>Hill's Science Diet Puppy</h3>
            <div class="amount">$15.00 - $30.00</div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img src="image/producto6.png" alt="" />
          </div>
          <div class="content">
            <h3>Purina Pro Plan Savor</h3>
            <div class="amount">$15.00 - $30.00</div>
          </div>
        </div>
      </div>
    </section>

    <!-- services section -->
    <section class="services" id="services">
      <h1 class="heading">Otros<span> Servicios </span></h1>
      <div class="box-container">
        <div class="box">
          <i class="fas fa-dog"></i>
          <h3>alojamiento para perros</h3>
          <a href="#" class="btn">Mas</a>
        </div>
        <div class="box">
          <i class="fas fa-cat"></i>
          <h3>alojamiento para gatos</h3>
          <a href="#" class="btn">Mas</a>
        </div>
        <div class="box">
          <i class="fas fa-bath"></i>
          <h3>spa y aseo</h3>
          <a href="#" class="btn">Mas</a>
        </div>
        <div class="box">
          <i class="fas fa-drumstick-bite"></i>
          <h3>comida saludable</h3>
          <a href="#" class="btn">Mas</a>
        </div>
        <div class="box">
          <i class="fas fa-baseball-ball"></i>
          <h3>ejercicio de actividad</h3>
          <a href="#" class="btn">Mas</a>
        </div>
        <div class="box">
          <i class="fas fa-heartbeat"></i>
          <h3>Cuidado de salud</h3>
          <a href="#" class="btn">Mas</a>
        </div>
      </div>
    </section>

    <!-- plan section starts  -->

    <section class="plan" id="plan">
      <h1 class="heading">Cambia tu <span>plan!</span></h1>
      <div class="box-container">
        <div class="box">
          <h3 class="title">cuidado de mascotas</h3>
          <h3 class="day">1 dia</h3>
          <i class="fas fa-bicycle icon"></i>
          <div class="list">
            <p>cuarto de mascotas <span class="fas fa-check"></span></p>
            <p>aseo de mascotas <span class="fas fa-check"></span></p>
            <p>ejercicio de mascotas <span class="fas fa-check"></span></p>
            <p>comidas para mascotas <span class="fas fa-check"></span></p>
          </div>
          <div class="amount"><span>$</span>$15.000</div>
          <a href="#" class="btn"> Cambiar Plan </a>
        </div>
        <div class="box">
          <h3 class="title">cuidado de mascotas</h3>
          <h3 class="day">10 dias</h3>
          <i class="fas fa-motorcycle icon"></i>
          <div class="list">
            <p>cuarto de mascotas <span class="fas fa-check"></span></p>
            <p>aseo de mascotas <span class="fas fa-check"></span></p>
            <p>ejercicio de mascotas <span class="fas fa-check"></span></p>
            <p>comidas para mascotas <span class="fas fa-check"></span></p>
          </div>
          <div class="amount"><span>$</span>$60.000</div>
          <a href="#" class="btn"> Cambiar Plan </a>
        </div>
        <div class="box">
          <h3 class="title">cuidado de mascotas</h3>
          <h3 class="day">30 dias</h3>
          <i class="fas fa-car-side icon"></i>
          <div class="list">
            <p>cuarto de mascotas <span class="fas fa-check"></span></p>
            <p>aseo de mascotas <span class="fas fa-check"></span></p>
            <p>ejercicio de mascotas <span class="fas fa-check"></span></p>
            <p>comidas para mascotas <span class="fas fa-check"></span></p>
          </div>
          <div class="amount"><span>$</span>$150.000</div>
          <a href="#" class="btn"> Cambiar Plan </a>
        </div>
      </div>
    </section>

    <!-- Section Contacto -->

    <section class="contact" id="contact">
      <div class="image">
        <img src="image/Contacto.png" alt="" />
      </div>

      <form action="">
        <h3>contacto</h3>
        <input type="text" placeholder="Nombre" class="box" />
        <input type="email" placeholder="Email" class="box" />
        <input type="tumber" placeholder="Numero" class="box" />
        <textarea
          name=""
          placeholder="Mensaje"
          id=""
          cols="30"
          rows="10"
        ></textarea>
        <input type="submit" value="Enviar Mensaje" class="btn" />
      </form>
    </section>
    <!--Pie de page-->
    <section class="footer">
      <!--<img src="image/
    top_wave.png" alt="">-->

      <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> Facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> Twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> Instgram </a>
        <a href="https://www.youtube.com/watch?v=Ywtsm8eamSw" class="btn">
          <i class="fab fa-youtube"></i> Youtube
        </a>
      </div>
      <div class="credit">@<span>The best pets </span></div>
    </section>
   
    <!-- Agregar los enlaces a los archivos JavaScript de Bootstrap y jQuery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-9Om9Xa6gPnMjdZn6zHxdkJf8gKqvPh/wtMP+6XkXrU5K6Z5t6fP7kkUJRY6+hJQ2i1+naqzjmN0KjrPUfhJcsg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"
      integrity="sha512-pRr5r6U5YI7VpDXx4u72AR4tdJv4uKq3LDq9Q1rgcFhZKjPZtTgTSeTzTbW8zvQgLKe55gMPn9XKN47tW8jvbw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Agregar el archivo JavaScript personalizado -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
</html>