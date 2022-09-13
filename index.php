<?php include('head.php')?>
<?php $currentPage = 'home';?>
<?php include('header.php')?>


  <main>
    <div class="banner">
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/home/banner.webp" alt="banner" class="d-block" style="width:100%">
            <div class="carousel-caption  text-start">
              <h3>Smart Toilet Solutions <br> For Your Home</h3>            
              <a href="about.php" class="btn btn-primary">Learn More </a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/home/banner3.webp" alt="banner2" class="d-block" style="width:100%">
            <div class="carousel-caption carousel-caption2 text-center w-100">
              <h3>Powerful Flushing, Elegant Features</h3>            
              <a href="about.php" class="btn btn-primary">Learn More </a>
            </div> 
          </div>
          <div class="carousel-item">
            <img src="assets/img/home/banner2.webp" alt="banner3" class="d-block" style="width:100%">
            <div class="carousel-caption carousel-caption3 text-center">
              <h6>G-SERIES: CLASSIC STYLE</h6>
              <h3>Persistent Pursuit of  <br>Quality & Performance</h3>            
              <a href="about.php" class="btn btn-primary">Learn More </a>
            </div>  
          </div>        
        </div>
      </div> 
      <img src="assets/img/home/mouse.svg" class="mouse-icon" alt="mouse-icon">
    </div>
  
    <div class="home1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">            
            <h3>1st Smart Toilet in Singapore to be certified by Singapore Test Lab (STL) and awarded with WELS (Water Efficiency Labelling Scheme).</h3>
            <p>SaniPro was setup in year 2001 as a collaboration with Xiamen R&T Plumbing Technology Co. Ltd. We have been existence in the market for over 20 years and carry a wide range of products that are being widely used in the sanitary industry. Our goal is to provide reliable and quality products at affordable prices to the mass sanitary market.</p>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="stl-feature text-center">
                  <img src="assets/img/home/icon.svg" alt="icon">
                  <p>COMMITMENT TO QUALITY</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="stl-feature text-center">
                  <img src="assets/img/home/icon1.svg" alt="icon">
                  <p>OVER 20 YEARS OF EXPERTISE</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="stl-feature text-center">
                  <img src="assets/img/home/icon2.svg" alt="icon">
                  <p>RELIABLE & TRUSTWORTHY</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="home2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-section">
              <h2 class="heading">Featured Products</h2>
            </div>
          </div>
          <div class="col-lg-12 mt-5">
            <div class="owl-carousel owl-theme featured-products">
              <div class="item">
                <div class="feature-pro-box">
                  <img src="assets/img/home/tab.png" alt="tab">
                  <p class="">Smart Toilet</p>  
                </div>                
              </div>
              <div class="item">
                <div class="feature-pro-box">
                  <img src="assets/img/home/sensor.svg" alt="sensor">
                  <p class="">Sensor Faucets</p>
                </div>
              </div>
              <div class="item">
                <div class="feature-pro-box">
                  <img src="assets/img/home/sensor-flush.svg" alt="sensor-flush">
                  <p class="">Sensor Flush Valve</p>
                </div>
              </div>
              <div class="item">
                <div class="feature-pro-box">
                  <img src="assets/img/home/consealed.png" alt="Concealed">
                  <p class="">Concealed Cisterns & Actuators</p>
                </div>
              </div>
              <div class="item">
                <div class="feature-pro-box">
                  <img src="assets/img/home/handicaped.svg" alt="handicaped">
                  <p class="">Handicapped-friendly products</p>
                </div>
              </div>
              <div class="item">
                <div class="feature-pro-box">
                  <img src="assets/img/home/handicaped.svg" alt="handicaped">
                  <p class="">Handicapped-friendly products</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home3">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-6 col-md-6">
            <h3 class="mb-5">Transcending Boundaries</h3>
            <p class="mb-5">Open your world to the ease and convenience of a smart bathroom. We strive to create timeless and sophisticated designs without compromising on practicality. We carry a diverse range of products from SaniPro to meet every individual’s needs — creating a perfect combination of cutting-edge technology and style, offering moments of peace and relaxation while heightening quality of life.</p>
            <a href="#" class="btn btn-primary">Bathroom Solutions</a>
          </div>
        </div>
      </div>
    </div>

  </main>


<?php include('footer.php')?>
