<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - COMFY</title>
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
  <main>

    <section class="height-full d-flex justify-content-center align-items-center position-relative">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-12 col-sm-12">
            <video class="img-fluid fade-in" autoplay muted playsinline>
              <source src="./assets/video/map.mp4" type="video/mp4">
              Tu navegador no soporta la etiqueta de video.
            </video>
          </div>
        </div>
      </div>
      
    </section>

    <section class="py-4 fade-in">
      <h2 class="title text-center">Categorías</h2>
      <p class="text-center text-md">Explora nuestra dimensa flota de medios de transporte que se adapta a tu ocasión.</p>
    </section>

    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Sport</h1>  
      <video style="width: 100%;" autoplay muted loop playsinline src="./assets/video/Lambo_gif.mp4" class="img-fluid video-category"></video>
    </section>
    
    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Eléctrico</h1>  
      <video style="width: 100%;" autoplay muted loop playsinline src="./assets/video/Tesla_gif.mp4" class="img-fluid video-category"></video>
    </section>

    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Marítimo</h1>  
      <video style="width: 100%;" autoplay muted loop playsinline src="./assets/video/JetSky_gif.mp4" class="img-fluid video-category"></video>
    </section>

        
    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Motores</h1>  
      <video style="width: 100%;" autoplay muted loop playsinline src="./assets/video/Buggy_gif.mp4" class="img-fluid video-category"></video>
    </section>

  
    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">4x4</h1>  
      <video style="width: 100%;" autoplay muted loop playsinline src="./assets/video/Ford_gif.mp4" class="img-fluid video-category"></video>
    </section>

    <section class="height-full d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="title">Herramientas innovadoras para una <span class="main-color">experiencia perfecta</span></h2>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </section>


    <div class="bg-custom-left bg-video-calendar">
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6 fade-in">
              <div class="mobile-video">
                <img src="./assets/img/calendar.gif" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6 fade-in">
              <h3 class="text-lg main-color text-center text-md-start">Calendario Novedoso</h3>
              <p class="text-md text-white text-center text-md-start">Nuestro calendario exclusivo para socios te permite tener un control total sobre tus reservas. Podrás cerrar fechas de forma sencilla, visualizar de un vistazo diario la información de los arrendatarios, y administrar tu disponibilidad de manera eficiente. Todo está diseñado para que tengas el control de tu espacio y maximizar tus oportunidades de negocio.</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="bg-custom-right bg-video-traduccion">
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6 fade-in">
              <h3 class="text-lg main-color text-center text-md-start">Traducción Sin Limites</h3>
              <p class="text-md text-white text-center text-md-start">En COMFY, eliminamos las barreras del idioma con nuestra innovadora herramienta de traducción dentro del chat. Tanto socios como arrendatarios pueden comunicarse fácilmente, sin importar el idioma, para coordinar reservas y detalles al instante. Nuestra tecnología garantiza conversaciones fluidas, permitiendo que todos se entiendan y gestionen su medio de transporte de manera rápida y eficiente.</p>
            </div>
            <div class="col-md-6 fade-in">
              <div class="mobile-video">
                <img src="./assets/img/traduccion.gif" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    <div class="bg-custom-left bg-video-zonafree">
      <section class="height-full d-flex fade-in justify-content-center align-items-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <video style="width: 100%;" autoplay muted loop playsinline src="./assets/video/freezone.mp4" class="img-fluid"></video>
            </div>
            <div class="col-md-6">
              <h3 class="text-lg main-color text-center">Zona Free</h3>
              <p class="text-md text-white text-center">Con nuestra herramienta Zona Free, te ofrecemos puntos estratégicos en lugares públicos designados para facilitar este proceso. Estas zonas son seguras y de fácil acceso, tanto para socios como para arrendatarios, garantizando una experiencia sin complicaciones. </p>
            </div>
          </div>
        </div>
      </section>
    </div>


  
    <!-- Testimonios -->
    <section>
      <div class="container">
        <h2 class="text-lg mb-2 main-color text-center">Experiencia COMFY</h2>
        <p class="mb-5 text-center text-md">Valoramos la opinión de nuestros usuarios.</p>

        <div class="row flex-nowrap mobile-review-container">
          <div class="col-md-4 p-3">
            <div class="client-review p-5">
              <h3>Joel Peralta</h3>
              <div style="display:flex; margin-bottom: 10px;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="text-se-a-unido">Se unió hace 8 meses</p>
              <p>Comfy es lo mejor que me ha pasado durante estos meses que he trabajado con ellos.</p>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="client-review p-5">
              <h3>Joel Peralta</h3>
              <div style="display:flex; margin-bottom: 10px;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="text-se-a-unido">Se unió hace 8 meses</p>
              <p>Comfy es lo mejor que me ha pasado durante estos meses que he trabajado con ellos.</p>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="client-review p-5">
              <h3>Joel Peralta</h3>
              <div style="display:flex; margin-bottom: 10px;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="text-se-a-unido">Se unió hace 8 meses</p>
              <p>Comfy es lo mejor que me ha pasado durante estos meses que he trabajado con ellos.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contacto -->
    <section class="py-4">
      <div class="container d-flex height-full justify-content-center align-items-center">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1 class="title text-center">Contacta con <span class="main-color">nosotros</span></h1>
            <p class="fs-24 fade-in text-center">En breve nos comunicaremos contigo.</p>
          </div>

          <div class="col-lg-6">
            <form action="./enviar.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input name="name" type="text" class="form-control" id="input_name">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="last_name" class="form-label">Apellidos</label>
                    <input name="last_name" type="text" class="form-control" id="input_name">
                  </div>
                </div>
              </div>
            
              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="input_email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enviaremos un email a este correo en cuanto podamos.</div>
              </div>

              <div class="mb-3">
                <label for="message" class="form-label">Escribe tu mensaje</label>
                <textarea name="message" class="form-control" id="input_message" rows="5"></textarea>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="checkbox_terminos">
                <label class="form-check-label" for="exampleCheck1">Acepto los términos y condiciones</label>
              </div>
              <button type="submit" class="button-main">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

 

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
    document.addEventListener('DOMContentLoaded', function() {
      var video = document.querySelector('.img-fluid.fade-in');
      video.muted = true;
      video.play().catch(function(error) {
        console.log('Autoplay blocked by the browser.');
      });
    });
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