<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Document</title>
  </head>

  <body class="dark bg-gray-800">
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
          // $controller = new Food_Controller();
        }
      ?>
    <!-- </div> -->
    <!-- Footer -->
    <?php
        include('components/footer.php');
      ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
  </body>
</html>
