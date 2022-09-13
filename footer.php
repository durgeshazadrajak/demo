<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-4">
                <div class="logo-section">
                    <h5 class="footer-menu-title">SaniPro Pte Ltd</h5>
                    <p>An established name in the sanitary industry for the past 20 years, we are proud to be the first company to obtain smart toilet approval in Singapore.</p>
                </div> 
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-3 col-md-3">
                <h5 class="footer-menu-title">Contact Details</h5>
                <p>10 Ubi Crescent #02-50, <br> Lobby C , Ubi Techpark<br> (408564)</p>
                <p>T: 9467 7649 / 9114 4986</p>
                <p>E: lucas@aquatiz.sg <br> sebastian@aquatiz.sg</p>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="footer-menu">
                    <h5 class="footer-menu-title">Quicklinks</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">Our Story</a></li>
                        <li><a href="services.php">Products</a></li>
                        <li><a href="products.php">iBathroom</a></li>
                        <li class="mb-3"><a href="contact.<?php  ?>">Get In Touch</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-2">
                <div class="footer-menu">
                    <h5 class="footer-menu-title">Follow Us</h5>
                    <ul>
                        <li>
                            <a href="#" target="_blank" class="me-3"><img src="assets/img/home/facebook.svg" alt="facebook"></a>
                            <a href="#" target="_blank"><img src="assets/img/home/instagram.svg" alt="instagram"></a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-12">
                
            </div>
        </div>
    </div>
    <div class="container-fluid copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="">Copyright 2022 © SaniPro Pte Ltd. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 text-end">                
                    <p>Web Design By <a href="https://websentials.com.sg/" target="_blank">Websentials <img src="assets/img/home/websentials.png" width="25" alt="websentials"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="https://api.whatsapp.com/send?phone=91144986" target="_blank" class="floating-icon">
    <img src="assets/img/gallery/wa.svg">
</a>



<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js"></script> 
<script>
  feather.replace()
</script>

 

<script type="text/javascript">
   $(document).ready(function() {      

      // services slider
    $('.owl-carousel.featured-products').owlCarousel({
        dots:false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2,
                nav:false
            },
            600: {
                items: 2,
                nav:false
            },
            1000: {
                items: 5
            }
        }
    });
      // brands-carousel
    $('.owl-carousel.client-slider').owlCarousel({
        dots:false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2,
                nav:false
            },
            600: {
                items: 3,
                nav:false
            },
            1000: {
                items: 4
            }
        }
    });

      // promotions-carousel
    $('.owl-carousel.promo-slider').owlCarousel({
        dots:false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 2,
                nav:false
            },
            600: {
                items: 3,
                nav:false
            },
            1000: {
                items: 4
            }
        }
    });

      // promotions-carousel
    $('.owl-carousel.testimonial-slider').owlCarousel({
        dots:false,
        margin: 50,
        nav: true,        
        responsive: {
            0: {
                items: 1,
                nav:false
            },
            600: {
                items: 2,
                nav:false
            },
            1000: {
                items: 3
            }
        }
    });
  });
  </script>
</body>
</html>
