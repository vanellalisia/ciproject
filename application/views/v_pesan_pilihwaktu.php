<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Diner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo base_url('assets/diner/css/font.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/owl.carousel.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/jquery.timepicker.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/diner/fonts/ionicons/css/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/diner/fonts/fontawesome/css/font-awesome.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/diner/fonts/flaticon/font/flaticon.css')?>">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/diner/css/style.css')?>">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    

    <div class="site-wrap">
      
    <?php include ('headerbar_pelanggan.php')?>

      <header class="site-header">
        <div class="row align-items-center">
          <div class="col-5 col-md-3">
             <ul class="list-unstyled social">
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-2 col-md-6 text-center">
            <a href="index.html" class="site-logo">D</a>
          </div>
          <div class="col-5 col-md-3 text-right menu-burger-wrap">
            <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

          </div>
        </div>
       
      </header> <!-- site-header -->
      
      <div class="main-wrap">
        <div class="cover_1 cover_sm">
          <div class="img_bg" style="background-image: url(img/slider-1.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7" data-aos="fade-up">
                  <h2 class="heading">Reservation</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo saepe dolorum dolorem, iste officia voluptates! Sint repudiandae, soluta voluptatem delectus iure, eaque, harum expedita, nisi aliquam magni odio perferendis ipsum!</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->
        
        <div class="section" data-aos="fade-up">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-8  text-center">
                <h2 class="mb-3">Reservation</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum fuga, alias distinctio voluptatum magni voluptatibus.</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form action="#">
                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Name</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" id="name">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="email" class="form-control" id="email">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Phone</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" id="phone">
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="persons" class="label">Number of Persons</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="persons" id="persons" class="form-control">
                          <option value="">1 person</option>
                          <option value="">2 persons</option>
                          <option value="">3 persons</option>
                          <option value="">4 persons</option>
                          <option value="">5+ persons</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Date</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="text" class="form-control" id="date">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="time" class="label">Time</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-time"></span>
                        <input type="text" class="form-control" id="time">
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Submit">
                      <!-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->

        <div class="map-wrap" id="map"  data-aos="fade"></div>

        <div class="section" data-aos="fade">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center"  data-aos="fade-up">
                <h2 class="mb-4">Customer's Reviews</h2>
              </div>
            </div>
            <div class="row justify-content-center text-center" data-aos="fade-up">
              <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false">

                
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quaerat recusandae molestias incidunt sapiente sit numquam delectus mollitia! Non laudantium impedit voluptas consequatur corrupti. Cumque consequuntur nemo eos et error!&rdquo;</p>
                      <div class="author">
                        <img src="img/person_1.jpg" alt="Image placeholder" class="mb-3">
                        <h4>Maxim Smith</h4>
                        <p>CEO, Founder</p>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Sint adipisci laborum dolorum ipsa quidem alias ipsum aperiam aut! Quis rerum soluta dolorem iure nihil velit error sequi? Dignissimos accusantium adipisci unde officia? Dolores aut sequi dolorum repellendus quod.&rdquo;</p>
                      <div class="author">
                        <img src="img/person_2.jpg" alt="Image placeholder" class="mb-3">
                        <h4>Geert Green</h4>
                        <p>CEO, Founder</p>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Ratione alias iure ab facere quia aliquam dolor et voluptates esse nihil corporis distinctio hic ea quo ducimus autem cum amet. Quos accusamus iusto porro nulla temporibus numquam commodi soluta.&rdquo;</p>
                      <div class="author">
                        <img src="img/person_3.jpg" alt="Image placeholder" class="mb-3">
                        <h4>Dennis Roman</h4>
                        <p>CEO, Founder</p>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Ad quod aspernatur ipsa. Numquam expedita delectus qui ad explicabo voluptas eos vel reiciendis magnam rerum quaerat quisquam accusantium quae saepe ipsam ullam ut ea molestiae porro. Recusandae veniam maxime.&rdquo;</p>
                      <div class="author">
                        <img src="img/person_2.jpg" alt="Image placeholder" class="mb-3">
                        <h4>Geert Green</h4>
                        <p>CEO, Founder</p>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div> <!-- .section -->

  

      </div> <!-- .main-wrap -->
      

      <footer>
        <div class="site-footer">
          <div class="container">
            <div class="row small-gutters mb-5">
              <div class="col-md-6 col-lg-3 mb-5" data-aos="fade" data-aos-delay="100">
                <div class="footer-widget">
                  <h3>Diner Restaurant</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel neque, odio illum. Est minima sint minus sunt ducimus.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5" data-aos="fade" data-aos-delay="200">
                <div class="footer-widget">
                  <h3>Lunch Service</h3>
                  <p>Booking from 12:00pm - 1:30pm</p>
                  <h3>Dinner Service</h3>
                  <p>Everyday: <br> Booking from 6:00pm - 9:00pm</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5" data-aos="fade" data-aos-delay="300">
                <div class="footer-widget">
                  <h3>Quick Links</h3>
                  <ul>
                    <li><a href="#">Help &amp; Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Get in Touch</a></li>
                    <li><a href="#">Testimonials</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-5" data-aos="fade" data-aos-delay="400">
                <div class="footer-widget footer-contact-widget">

                  <h3>Subscribe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <form action="" class="form-subscribe mb-5">
                    <div class="form-group form-field">
                      <input type="submit" value="Send" class="btn btn-primary">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                  </form>

                  <h3>Contact Us</h3>
                  <p class="contact-email">info@yourdomain.com</p>
                  <p class="contact-phone">1-444-123-9829</p>
                  
                  
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </footer>

      <div class="site-footer-copyright">
        <div class="container">
          <div class="row">

             <p class="footer-text col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>

    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php echo base_url('assets/diner/js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/jquery-migrate-3.0.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/jquery.waypoints.min.js')?>"></script>

    <script src="<?php echo base_url('assets/diner/js/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/jquery.timepicker.min.js')?>"></script>
    <script src="<?php echo base_url('assets/diner/js/jquery.stellar.min.js')?>"></script>

    <script src="<?php echo base_url('assets/diner/js/aos.js')?>"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="js/main.js"></script>
  </body>
</html>