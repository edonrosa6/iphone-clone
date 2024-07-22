<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beneficios Y Servicios - COMFY</title>
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
        <div class="row">
          <div class="col-md-6">
            <h1 class="title">Beneficios Y <span class="main-color">Servicios</span></h1>
            <p class="text-md">
              COMFY ofrece varios métodos de pago para facilitar tus transacciones, incluyendo tarjetas de crédito, debito, Paypal y otros métodos de pagos electrónicos.
            </p>
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>


    <section class="height-full d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title-2 text-center">Revibe tus ingresos de múltiples formas:</h2>
          </div>
        </div>
      </div>
    </section>


      
    <div class="bg-video-paypal bg-custom-left">
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title-2 main-color">PayPal</h2>
              <p>A través de este método de cobro tus pagos llegaran de 24 a 48 horas laborales.</p>
            </div>
        
            <div class="col-md-6">
              
            </div>

          </div>
        </div>
      </section>
    </div>

    <div class="bg-video-transferencia bg-custom-right">
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title-2 main-color">Transferencia bancaria</h2>
              <p>Recibes tus fondos al banco de tu preferencia en el pais donde residas.</p>
            </div>
        
            <div class="col-md-6">
              
            </div>

          </div>
        </div>
      </section>
    </div>

    <div class="bg-video-payoneer bg-custom-left">
      <section class="height-full d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title-2 main-color">Payoneer</h2>
              <p>A través de esta plataforma recibes tus fondos en menos de 48 horas. (Idea visual: un conductor en un carro deportivo llevando una bolsa de dinero).</p>
            </div>
        
            <div class="col-md-6">
              
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