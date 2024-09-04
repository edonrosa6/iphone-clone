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
            <video class="img-fluid fade-in" autoplay muted>
              <source src="./assets/video/map.mp4" type="video/mp4">
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
      <video style="width: 100%;" autoplay muted loop src="./assets/video/Lambo_gif.mp4" class="img-fluid"></video>
    </section>
    
    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Eléctrico</h1>  
      <video style="width: 100%;" autoplay muted loop src="./assets/video/Tesla_gif.mp4" class="img-fluid"></video>
    </section>

    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Marítimo</h1>  
      <video style="width: 100%;" autoplay muted loop src="./assets/video/JetSky_gif.mp4" class="img-fluid"></video>
    </section>

        
    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">Motores</h1>  
      <video style="width: 100%;" autoplay muted loop src="./assets/video/Buggy_gif.mp4" class="img-fluid"></video>
    </section>

  
    <section class="section-video-cat fade-in" style="position: relative;">
      <h1 class="cat-title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white;">4x4</h1>  
      <video style="width: 100%;" autoplay muted loop src="./assets/video/Ford_gif.mp4" class="img-fluid"></video>
    </section>


    <section class="d-flex flex-column justify-content-center bg-custom bg-image position-relative">

      <video class="background-video" autoplay loop muted>
        <source src="./assets/video/Calendar_v03.mp4" type="video/mp4">
      </video>

      <div class="container align-items-center d-flex height-full">
        <h2 class="text-left fade-in title-2">Herramientas</h2>
      </div>

      <div class="container align-items-center d-flex height-full">
        <h2 class="text-left fade-in title-2">Calendario</h2>
      </div>

      
      <div class="container justify-content-end align-items-center d-flex height-full">
        <h2 class="text-end fade-in title-2">Traduccion</h2>
      </div>
      
    </section>


  
    <div class="bg-custom bg-image2">
      <section class="d-flex flex-column justify-content-center">
        <div class="container align-items-center justify-content-end d-flex height-full">
          <div>
            <h2 class="text-end fade-in title-2">Nueva APP Wallet Comfy RD 1.0</h2>
          </div>
        </div>
      </section>

      <section class="d-flex flex-column justify-content-center">
        <div class="container align-items-center justify-content-start d-flex height-full">
          <h2 class="fade-in title-2">Mira tus transacciones recientes</h2>
        </div>
      </section>

      <section class="d-flex flex-column justify-content-center">
        <div class="container align-items-center justify-content-end d-flex height-full">
          <h2 class="text-end fade-in title-2">Consulta tu Wallet</h2>
        </div>
      </section>
    </div>

    

    <!-- VIDEO CON TEXTO -->
    <section class="py-5 d-flex flex-column justify-content-center">
      <div class="container">
        <video class="img-fluid fade-in" src="./assets/video/Service_v03.mp4" autoplay="true" muted="true" loop="true"></video>

        <h2 class="fade-in">Hasta 2 veces más Cancelación Activa de Ruido. 
          El modo Ambiente te permite escuchar el mundo que te rodea. 
          El nuevo Audio Adaptativo personaliza el control de ruido según tu entorno. 
          El Audio Espacial lleva la experiencia del sonido inmersivo a un nivel mucho más personal. 
          Y con una sola carga puedes disfrutar 6 horas de batería.</h2>
      </div>
    </section>


    <section class="d-flex flex-column justify-content-center">
      <hr class="m-0">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-md-6 border-right d-flex justify-content-center">
            <div class="py-5 text-center">
              <video muted autoplay style="max-width: 100%;">
                <source src="https://www.apple.com/105/media/us/airpods-pro/2022/d2deeb8e-83eb-48ea-9721-f567cf0fffa8/anim/h2/large.mp4" type="video/mp4">
              </video>
            </div>
          </div>

          <div class="col-12 col-md-6 d-flex justify-content-center">
            <div class="space-double-section-x">
              <p class="chip-text"><span class="text-per fw-bold">El chip H2</span> trae más funcionalidades que nunca, y usa <span class="main-color">algoritmos</span> para lograr una cancelación de ruido más inteligente, un sonido tridimensional superior y una mayor duración de la batería, todo al mismo tiempo.</p>
            </div>
          </div>
        </div>
      </div>

      <hr class="m-0">
    </section>

    <section class="d-flex flex-column justify-content-center m-0">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-6 d-flex justify-content-center bg-blur-green">
            <div class="py-5 text-center">
              <div class="m-0 h3">Hasta</div>
              <h2 class="main-color text-xl m-0">2 veces</h2>
              <p class="mb-0 mt-3 h5">más Cancelación <br>Activa de Rudio</p>
            </div>
          </div>

          

          <div class="col-12 col-lg-6 d-flex flex-column justify-content-center border-left">
            <div class="d-flex align-items-center space-double-section-x min-h-350">
              <p class="chip-text py-3"><span class="text-per fw-bold">Mejor Transporte en RD</span> trae más funcionalidades que nunca, y usa <span class="main-color">algoritmos</span> para geolocalizar tus pedidos.</p>
            </div>

            <hr>
            <div>
              <div class="space-double-section-x d-flex align-items-center min-h-350">
                <p class="chip-text py-3"><span class="text-per fw-bold">Mejor Transporte en RD</span> trae más funcionalidades que nunca, y usa <span class="main-color">algoritmos</span> para geolocalizar tus pedidos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="m-0">
    </section>

    <section class="d-flex flex-column justify-content-center m-0">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-6 d-flex justify-content-center align-items-end bg-blur-green-2 space-sections border-right min-h-600">
            <div>
              <div class="m-0 h5 main-color mb-4">Próximamente este año</div>
              <h2 class="siri-text mb-5">Siri más a la mano, <br>sin usar las manos.</h2>
              <p class="mb-0 mt-3 h5">Con las <span class="text-white">Interacciones de Siri</span>, pronto vas a poder asentir o negar con la cabeza cuando Siri te pregunte si quieres contestar una llamada, escuchar un mensaje de texto o notificación, poner temporizadores y alarmas o comenzar un entrenamiento. Interactuar con Siri ahora será más fácil que nunca, incluso si tienes las manos ocupadas o no quieres hablar en voz alta.</p>
            </div>

          </div>

          <hr class="d-block d-lg-none">

          <div class="col-12 col-lg-6 d-flex justify-content-center align-items-end align-self-end bg-blur-green-2 space-sections min-h-600">
            <div>
              <h2 class="siri-text mb-5">Control en la punta <br>de tus dedos.</h2>
              <p class="mb-0 mt-3 h5">Puedes controlar las funciones de reproducción con el <span class="text-white">control táctil</span> en la parte inferior. Desliza hacia arriba o hacia abajo para ajustar el volumen. Presiona una vez para reproducir y pausar la música o para silenciar y activar tu voz en una llamada, y dos veces para finalizarla. También puedes cambiar entrae modos de audio con una simple presión.</p>
            </div>
          </div>


        </div>
      </div>

      <hr class="m-0">
    </section>

    <section class="py-5">
      <div class="container">
        <h3 class="text-xxl fade-in">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur dicta accusamus laborum? Labore, modi. Praesentium ducimus unde eius eum eveniet necessitatibus culpa, neque amet esse enim quod recusandae earum repellat.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quam dolores unde assumenda corporis tenetur velit voluptate cum excepturi? Hic optio tempora quis! Porro provident libero deserunt labore repellendus quos.
        </h3>
      </div>
      <hr class="mt-5">
    </section>

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