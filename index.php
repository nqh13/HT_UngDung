<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/info.css" />
    <link
      rel="stylesheet"
      href="./assets/Font/fontawesome-free-6.4.2-web/css/all.min.css"
    />
  </head>

  <body>
    <?php
        include('components/header.php');
    ?>
    <!-- <div class="container-fluid"> -->
      <!-- Carousel -->
      <?php
      ?>
      <!-- Content -->
      <?php
        if(!isset($_GET['page'])) {
          include('components/carousel.php');
          include('views/home/index.php');

        }else{
          include('views/'.$_GET['page'].'/index.php');
          $controller = new Food_Controller();
        }
      ?>
    <!-- </div> -->
    <!-- Footer -->
    <?php
        include('components/footer.php');
      ?>
  </body>
</html>
