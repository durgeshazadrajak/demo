<?php include('head.php')?>
<?php $currentPage = 'about';?>
<?php include('header.php')?>


  <main>
      <div class="container page-titile-section">
        <div class="col-lg-12 col-md-12 mb-4 mt-5 text-center">
          <ul class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Our Story</li>
          </ul> 
          <h2 class="heading">About Us</h2>
        </div>
      </div> 

      <div class="about2">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-5">
            <img src="assets/img/about/about1.webp" alt="about1" class="w-100">
          </div>
          <div class="col-lg-7 col-md-7">
            <div class="">
              <h4>We are the 1st Smart Toilet in Singapore to be certified by Singapore Test Lab (STL) and awarded with WELS (Water Efficiency Labelling Scheme).</h4>
              <p>SaniPro was setup in year 2001 as a collaboration with Xiamen R&T Plumbing Technology Co. Ltd. We have been existence in the market for over 20 years and carry a wide range of products that are being widely used in the sanitary industry. Our goal is to provide reliable and quality products at affordable prices to the mass sanitary market. <br><br> 
              Over the years, we have have secured many residential and commercial projects locally and regionally. SaniPro is the first company to obtain the smart toilet approval in Singapore would like to introduce this new Smart Technology Toilet into a new era of Sanitary World.</p>
            </div>            
          </div>
        </div>
      </div>
    </div>  

  </main>

  <?php include('footer.php')?>


<script>
  $(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>