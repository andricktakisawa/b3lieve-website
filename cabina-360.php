<!DOCTYPE html>
<html lang="es">

  <head>
  <title>B3LIEVE - Cabinas fotográficas prémium | 360° Booth</title>
  <?php include 'includes/head.php'; ?>
  <link rel="stylesheet" href="./assets/css/prices.css">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  </head>

<body>

  
  <!-- 
    - HEADER
  -->

  <?php include 'includes/header.php'; ?>


  <!-- 
        - ACERCA DE
      -->

  <section class="about" id="about">
    <div class="container">

      <div class="about-content">

        <div class="about-icon">
          <ion-icon name="information"></ion-icon>
        </div>

        <h2 class="h2 about-title">Booth <strong>foto y videográfica</strong> 360&deg;</h2>

        <p class="about-text">
          Informaci&oacute;n de nuestra cabina 360&deg;
        </p>

        <a href="contact"><button class="btn btn-primary">Cotizar ahora</button></a>

      </div>

      <ul class="about-list">

        <li>
          <div class="about-card">

            <div class="card-icon">
              <ion-icon name="cloud-done-outline"></ion-icon>
            </div>

            <h3 class="h3 card-title">En la nube</h3>

            <p class="card-text">
              Guardado en la nube hasta por 2 meses.
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <ion-icon name="videocam-outline"></ion-icon>
            </div>

            <h3 class="h3 card-title">VideoBooth</h3>

            <p class="card-text">
              Utilizable como VideoBooth.
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <ion-icon name="send-outline"></ion-icon>
            </div>

            <h3 class="h3 card-title">Env&iacute;o directo</h3>

            <p class="card-text">
              Env&iacute;o inmediato a trav&eacute;s de Email, Airdrop o mediante escaneo de QR.
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <ion-icon name="hourglass-outline"></ion-icon>
            </div>

            <h3 class="h3 card-title">Almacenamiento</h3>

            <p class="card-text">
              Tiempo de almacenamiento de archivos: 2 meses.
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <ion-icon name="brush-outline"></ion-icon>
            </div>

            <h3 class="h3 card-title">Personalizaci&oacute;n</h3>

            <p class="card-text">
              Elige tu template favorita y añade los props que desees para foto incre&iacute;ble.
            </p>

          </div>
        </li>

      </ul>

    </div>
  </section>


    <!-- 
        PACKS
       -->

       <!-- 360 BOOTH -->
       <h2 style="font-size: 45px; text-align: center; padding-bottom: 25px;">Precios: Booth 360°</h2>

      
      <?php include 'includes/pr_booth360.php'; ?>

    
    <!-- 
            - FOOTER
        -->
        <?php include 'includes/footer.php'; ?>



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>