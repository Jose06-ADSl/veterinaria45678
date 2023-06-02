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
      <a href="home.php" class="logo"> <i class="fas fa-paw">the best pets</i></a>

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
        <div class="fas fa-user" id="login-btn"></div>
      </div>
      <form action="registro.php" class="login-form" method="POST">
        <h3>Inicio</h3>
       
        <div class="links">
          <a class="btn btn-primary d-block mb-3"  href="home.php">Inicio</a>
          <a  class="btn btn-primary d-block mb-3" href="./controladores/cerrarsesion.php">Cerrar sesion</a>
        </div>
      </form>
  
    </header>

    <section class="about vh-100 custom-section" id="about" style="background-color: #f4f5f7; ">
    <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2c6eiNDUZ7_AK0lhWktKsFg1WvlcHt2nv5-P5MBk&s"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5></h5>
              <p><?php 
        echo $email['nombres']," ", $email['apellidos']; ?></p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">
                    <?php 
               echo $email['email']; ?>
                    </p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p >
                      <?php 
               echo $email['telefono']; ?></p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
    
</section>
   
    <!-- Agregar los enlaces a los archivos JavaScript de Bootstrap y jQuery -->
    <!-- <script
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
    ></script> -->
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
