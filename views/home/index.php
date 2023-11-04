<?php
include 'controllers/foodController.php';
include 'controllers/categoryController.php';
$foodController = new Food_Controller();
$categoryController = new Category_Controller();
$foods = $foodController->index();
$categories = $categoryController->index();
?>
<style>
.card {
    /* width: 190px;
    height: 254px; */
    padding: .8em;
    background: #f5f5f5;
    position: relative;
    overflow: visible;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.card-img {
    background-color: #ffcaa6;
    height: 40%;
    width: 100%;
    border-radius: .5rem;
    transition: .3s ease;
}

.card-info {
    padding-top: 10%;
}

svg {
    width: 20px;
    height: 20px;
}

.card-footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    border-top: 1px solid #ddd;
}

/*Text*/
.text-title {
    font-weight: 900;
    font-size: 1.2em;
    line-height: 1.5;
}

.text-body {
    font-size: .9em;
    padding-bottom: 10px;
}

/*Button*/
.card-button {
    border: 1px solid #252525;
    display: flex;
    padding: .3em;
    cursor: pointer;
    border-radius: 50px;
    transition: .3s ease-in-out;
}

/*Hover*/
.card-img:hover {
    transform: translateY(-25%);
    box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
}

.card-button:hover {
    border: 1px solid #ffcaa6;
    background-color: #ffcaa6;
}
</style>
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
                                    <?php
                                  foreach($categories as $category) {
                                    echo '<li class="nav-item"><a class="nav-link" href="#">'.$category['TenLoai'].'</a></li>';
                                  }
                                  ?>
                                    <!-- <li class="nav-item">
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
                                    </li> -->
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
                    <?php
                  foreach($foods as $food) {
                    echo '
                    <div class="card col-lg-3 col-md-6 col-sm-12">
                      <div class="card-img">
                                <img
                                                        src="./img/comtam.jpg"
                                                        alt="Cơm"
                                                        width="100%"
                                                        height="100%"
                                            />
                      </div>
                      <div class="card-info">
                        <p class="text-title">'.$food['TenMonAn'].'</p>
                        <p class="text-body">'.$food['ThanhPhan'].'</p>
                      </div>
                      <div class="card-footer">
                      <span class="text-title">'.number_format($food['GiaTien'], 0, ',', '.').'đ</span>
                      <div class="card-button">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                          <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                          <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                          <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                        </svg>
                      </div>
                    </div>
                    ';
                  }
                ?>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
                            <div class="card-body">
                                <h4 class="card-title">Cơm tấm</h4>
                                <p class="card-text">Sườn, bì, chả</p>
                                <h4 class="card-title">35.000đ</h4>
                                <a href="./html/chitietmonan.html" class="btn btn-primary">Đặt món</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
                            <div class="card-body">
                                <h4 class="card-title">Cơm tấm</h4>
                                <p class="card-text">Sườn, bì, chả</p>
                                <h4 class="card-title">35.000đ</h4>
                                <a href="./html/chitietmonan.html" class="btn btn-primary">Đặt món</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
                            <div class="card-body">
                                <h4 class="card-title">Cơm tấm</h4>
                                <p class="card-text">Sườn, bì, chả</p>
                                <h4 class="card-title">35.000đ</h4>
                                <a href="./html/chitietmonan.html" class="btn btn-primary">Đặt món</a>
                            </div>
                        </div>
                    </div> -->
        </div>
        </section>
    </div>
</div>
</div>