<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conoce COMFY - COMFY</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  
  <link href="./css/styles.css" rel="stylesheet">
  <link href="./css/mobile-menu.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b862c27f27.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="progress-scroll" id="progressBar"></div>

  <?php include("./includes/header.html") ?>
  <main class="py-5">
  <section class="height-full d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1 class="title">Conoce <span class="main-color">COMFY</span></h1>
            <p class="text-md">Comfy es una empresa de autos compartidos que opera bajo un modelo de negocio peer-to-peer (P2P).</p>
            <a href="#!" class="main-color">¿Qué es P2P?</a>
          </div>
          <div class="col-md-6">
            <img src="./assets/img/llaves.jpg" class="img-fuild"/>
          </div>
        </div>
      </div>
    </section>


    <div class="">
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title-2">Revolucionando la Movilidad</h2>
              <p>Reconocimos la necesidad de una solución más conveniente y accesible para moverse, y nuestro objetivo es revolucionar la manera en que las personas se desplazan y rentan vehículos, apostando por la tecnología y la innovación continua en el mercado automovilístico.</p>
            </div>

            <div class="col-md-6">
              <img src="./assets/img/collage-vehiculos.jpg" class="img-fluid"/>
            </div>

          </div>
        </div>
      </section>

      
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title-2">Reserva a un solo Clic</h2>
              <p>Ofrecemos una alternativa con un sistema de renta ágil que simplifica el proceso de reservar y utilizar vehículos compartidos. En Comfy, puedes buscar un medio de transporte disponible en tu área, comparar precios y características, y completar la reserva de manera rápida y sencilla con un solo clic.</p>
            </div>
            
            <div class="col-md-6">
              
            </div>

          </div>
        </div>
      </section>

      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="title-2">Soporte Vial 24/7</h2>
              <p>Nuestro Soporte Vial 24/7 es un servicio integral que garantiza asistencia en carretera las 24 horas del día, los 7 días de la semana. Ya sea que te encuentres en medio de la ciudad o en una carretera rural, nuestro equipo de profesionales está listo para ayudarte con cualquier inconveniente que pueda surgir durante tu viaje.</p>
            </div>
            
            <div class="col-md-6">
              <img src="./assets/img/soporte-vial.jpg" class="img-fluid"/>
              <img src="./assets/img/carro-arriba-de-camion.jpg" class="img-fluid"/>
            </div>

          </div>
        </div>
      </section>

      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title-2">Reserva Anticipada</h2>
              <p>Ofrecemos opciones de reserva anticipada con la facilidad de asegurar tu medio de transporte favorito con un 40% del monto total de la reserva, para que no te pierdas tu próxima aventura.</p>
            </div>
            
            <div class="col-md-6">
              
            </div>

          </div>
        </div>
      </section>

      
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="title-2">Comunidad COMFY</h2>
              <p>COMFY no es solo una aplicación de alquiler de autos, sino una comunidad de usuarios comprometidos que promueven su amor por la movilidad compartida. Los usuarios pueden conectarse con otros miembros, compartir sus experiencias de viaje, y recomendar vehículos y destinos favoritos, agregando un elemento humano y personal a la experiencia de alquiler.</p>
            </div>
            
            <div class="col-md-6">
              <img src="./assets/img/comunidad-comfy.jpg" class="img-fluid"/>
            </div>

          </div>
        </div>
      </section>

      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="title-2">Seguridad de tus datos</h2>
              <p>Integramos sistemas de seguridad tanto biométricos como encriptados para proteger los datos personales y bancarios de nuestros usuarios.</p>
            </div>
            
            <div class="col-md-6">
              <img src="./assets/img/candado-comfy.jpg" class="img-fluid"/>
            </div>

          </div>
        </div>
      </section>
    </div>

  
  </main>

  <?php include("./includes/footer.html") ?>
  
  <script>
    window.onscroll = function() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("progressBar").style.width = scrolled + "%";
    };
  </script>

  <script>
    function showMenu() {
      document.getElementById('mobileMenu').classList.toggle('open');
    }
  </script>

  <script src="./js/menu.js"></script>
  <script src="./js/index.js">
  </script>
  <script src="./js/darkMode.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script src="//code.tidio.co/55bgaxzaivmcg9ua7tgw0m7ln9gfegip.js" async></script>
</body>
</html>