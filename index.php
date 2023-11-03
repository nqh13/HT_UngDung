<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="stylesheet"
      href="./assets/Font/fontawesome-free-6.4.2-web/css/all.min.css"
    />
  </head>

  <body>
    <?php
        include('components/header.php');
    ?>
    <div class="container-fluid">
      <!-- Carousel -->
      <?php
        include('components/carousel.php');
      ?>
      <!-- Content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <span class="title-head">DANH MỤC MÓN ĂN</span>
                </div>
                <aside>
                  <div class="Aside-title">
                    <div class="container-fluid">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Món ăn chính</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Món Canh</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Món ăn phụ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Tráng miệng</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
            <div></div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row">
              <span class="title-mon-an">MÓN ĂN</span>
            </div>
            <section class="section">
              <div class="row p-3">
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="./img/comtam.jpg"
                      alt="Cơm"
                    />
                    <div class="card-body">
                      <h4 class="card-title">Cơm tấm</h4>
                      <p class="card-text">Sườn, bì, chả</p>
                      <h4 class="card-title">35.000đ</h4>
                      <a href="./html/chitietmonan.html" class="btn btn-primary"
                        >Đặt món</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="./img/comtam.jpg"
                      alt="Cơm"
                    />
                    <div class="card-body">
                      <h4 class="card-title">Cơm tấm</h4>
                      <p class="card-text">Sườn, bì, chả</p>
                      <h4 class="card-title">35.000đ</h4>
                      <a href="./html/chitietmonan.html" class="btn btn-primary"
                        >Đặt món</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="./img/comtam.jpg"
                      alt="Cơm"
                    />
                    <div class="card-body">
                      <h4 class="card-title">Cơm tấm</h4>
                      <p class="card-text">Sườn, bì, chả</p>
                      <h4 class="card-title">35.000đ</h4>
                      <a href="./html/chitietmonan.html" class="btn btn-primary"
                        >Đặt món</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php
        include('components/footer.php');
      ?>
    </div>
  </body>
</html>
