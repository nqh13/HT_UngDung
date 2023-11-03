<div class="container-fluid bg-light hi">
    <h6>Chào mừng bạn đến với bếp ăn tập đoàn!</h6>
</div>
<header class="container-fluid">
  <div class="row main-header">
      <div class="col-lg-4 col-md-4 12">
          <a href="index.html"><img class="logo" src="./img/LOGO-01.png" alt="Logo" /></a>
      </div>
      <div class="col-lg-4 col-md-4 12 time">
          <div class="clock">
              <i class="fa-regular fa-clock" style="color: #080808; font-size: 50px"></i>
          </div>
          <div class="time-content">
              <span class="time-title">OPEN:</span><br />
              <span class="time-info">10AM - 17PM</span>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 12 user">
          <i class="fa-solid fa-user fa-2xl"></i>
          <div class="title-user">
              <ul class="nav">
                  <li class="nav-item dropdown">
                      <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          style="color: #080808; text-decoration: none" href="#">User</a>
                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-item" href="#">Xem Phiếu đặt món</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Xem công nợ</a></li>
                          <li><a class="dropdown-item" href="#">Đề xuất món</a></li>
                          <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="#">TRANG CHỦ</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link " href="?page=menu">THỰC ĐƠN</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link" href="?page=about">GIỚI THIỆU</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link" href="?page=contact">LIÊN HỆ</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Bạn cần tìm gì ..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="cart ms-5">
                <a href="?page=cart"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #fcfcfd"></i></a>
            </div>
        </div>
    </div>
</nav>