<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - COMFY</title>
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

    <div class="mode">
    <a class="btn-mode" href="#!" onclick="toggleDarkMode()" id="toggleMode"><i id="iconMode" class="fa-solid fa-sun"></i></a>
  </div>

    <script>
      function showMenu() {
        document.getElementById('mobileMenu').classList.toggle('open');
      }
    </script>
    
    <script>
      window.onscroll = function() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("progressBar").style.width = scrolled + "%";
      };
    </script>

    <script src="./js/menu.js"></script>
    <script src="./js/index.js">
    </script>
    <script src="./js/darkMode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>