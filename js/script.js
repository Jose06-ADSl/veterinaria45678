 let loginForm = document.querySelector(".header .login-form");

 document.querySelector("#login-btn").onclick = () => {
   loginForm.classList.toggle("active");
   navbar.classList.remove("active");
 };

 let navbar = document.querySelector(".header .navbar");

 document.querySelector("#menu-btn").onclick = () => {
   navbar.classList.toggle("active");
   loginForm.classList.remove("active");
 };

window.onscroll = () => {
  loginForm.classList.remove("active");
  navbar.classList.remove("active");

  if (window.scrollY > 0) {
    document.querySelector(".header").classList.add("active");
  } else {
    document.querySelector(".header").classList.remove("active");
  }
};

window.onload = () => {
  if (window.scrollY > 0) {
    document.querySelector(".header").classList.add("active");
  } else {
    document.querySelector(".header").classList.remove("active");
  }
};
const modal = document.getElementById("modal");
const openModalBtn = document.getElementById("open-modal");
const closeModalBtn = document.getElementsByClassName("close")[0];

openModalBtn.addEventListener("click", function() {
  modal.style.display = "block";
});

closeModalBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

function registrar() {
  
 
  var forms = document.querySelectorAll('#miform input');
  let isEmpty = false;


  forms.forEach(input => {
    if (input.value == "") {
      input.style["border"] = "1px solid red";
      isEmpty = true;
    }
  });

  if (isEmpty) {
    Swal.fire("'Error'", "Completa todos los campos", "error");
   
    return;
    
  }

  const form = new FormData(document.getElementById("miform"));

  fetch('controladores/modelcontroller.php', {
    method:"POST", 
    body: form, 
    headers: {
    //'Content-Type': 'application/json'
    //Content-Type': 'application/x-www-form-urlencoded',
    }
    
  })
  .then(response => response.text())
  .then(data => {
    if (data.includes("¡El usuario")) {
      document.getElementById("miform").reset();
      Swal.fire("¡Veterinaria!", data, "success").then(() => {
        window.location.href = "login.php";
      });
    } else if (data.includes("¡Este usuario ya se encuentra registrado!")) {
      Swal.fire("'Ups...'", data, "info");
      document.getElementById("miform").reset();
    } else {
      Swal.fire("Error", "Hubo un error al registrar tu cuenta.", "error");
    }
    
  });
 
 
}

const data ={
  email: "sfasd@gmail.com",
  password: "123456",
  nombres : "juan",
  apellidos : "baena",
  telefono: "3005765090"
}


function iniciar() {
  
  var forms = document.querySelectorAll('#logform input');
  let isEmpty = false;

 
  forms.forEach(input => {
    if (input.value == "") {
      input.style["border"] = "1px solid red";
      isEmpty = true;
    }
  });

  if (isEmpty) {
    Swal.fire("'Error'", "Completa todos los campos", "error");
   
    return;
    
  }

  const form = new FormData(document.getElementById("logform"));

  fetch('controladores/logincontroller.php', {
    method:"POST", 
    body: form, 
    headers: {
    //'Content-Type': 'application/json'
    //Content-Type': 'application/x-www-form-urlencoded',
    }
    
  })
  .then(response => response.text())
  .then(data => {
    console.log(data);
    
    if (data.includes('Inicio de sesión exitoso. ¡Bienvenido,')) {
      document.getElementById("logform").reset();
      Swal.fire("¡Hola!", data, "success").then(() => {
        window.location.href = "home.php";
      });
     
    } else if (data.includes('El usuario no está registrado. Por favor, regístrate primero')) {
      Swal.fire("¡Ups...!", data, "info");
    } else if (data.includes('Contraseña incorrecta. Por favor, verifica tus credenciales.')) {
      Swal.fire("Error", data, "error");
    } else {
      
    }
  })
 
}






