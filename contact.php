<?php include('head.php')?>
<?php $currentPage = 'contact';?>
<?php include('header.php')?>


  <main>
    <div class="container page-titile-section">
      <div class="col-lg-12 col-md-12 mb-4 mt-5 text-center">
        <ul class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ul> 
        <h2 class="heading">Get In Touch</h2>
      </div>
    </div>
   

    <div class="contact1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-9">
            <div class="row">
              <div class="col-lg-12 text-center mb-5 ">
                <h3 class="text-center">Contact us to book an appointment!</h3>
              </div>
              <div class="col-lg-4 col-md-4 text-center">       
              <img src="assets/img/contact/location.svg" alt="location">
                <p>10 Ubi Crescent #02-50 , Lobby C ,<br> Ubi Techpark (408564)</p>
              </div>
              <div class="col-lg-4 col-md-4 text-center">
                <img src="assets/img/contact/phone.svg" alt="phone">
                <p>T: 9467 7649 / 9114 4986</p>
              </div>
              <div class="col-lg-4 col-md-4 text-center">
                <img src="assets/img/contact/mail.svg" alt="mail">
                <p>E: Lucas@aquatiz.sg  <br>Sebastian@aquatiz.sg</p>
              </div>
              <div class="col-lg-12 col-md-12 mt-4">
                <form class="contact-form">
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group mb-4">
                        <input type="text" name="fname" placeholder="Name" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group mb-4">
                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group mb-4">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group mb-4">
                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group mb-4">                
                        <textarea rows="5" name="message" placeholder="Message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-end submit-btnn">
                      <button class="btn btn-primary" type="submit">Submit </button>
                    </div>
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div>

        
      </div>
    </div>

  </main>


<?php include('footer.php')?>
