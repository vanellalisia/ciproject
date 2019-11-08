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
  </head>
  <body>
    
  <?php include ('headerbar_pelanggan.php')?>  <!-- site-header -->
      
      <div class="main-wrap">
        <div class="cover_1 cover_sm">
          <div class="img_bg" style="background-image: url(<?php echo base_url('assets/images/slider-1.jpg'); ?>);" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7" data-aos="fade-up">
                  <h2 class="heading" align="center">Menu Kantin</h2>
                  
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->
        
        <div class="section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8" data-aos="fade-up">

                <h2 class="mb-5 text-center">Daftar Menu</h2>

                <ul class="nav site-tab-nav" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Makanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Minuman</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Snack</a>
                  </li>
                </ul>
                <?php 
                $i=0;
                foreach($menu as $list){
                ?>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#"><?php echo $list->nama_menu ?></a></h3>
                        <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p>
                      </div>
                      <div class="price order-2">
                        <strong><?php echo $list->harga_menu ?></strong>
                      </div>
                    </div> <!-- .menu-food-item -->
                    <?php
										$i++;
										} ?>
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Key Wast Machos</a></h3>
                        <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$11.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Crispy Onions Rings</a></h3>
                        <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$11.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Lobster &amp; Shrimp Quesadilla</a></h3>
                        <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$13.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->


                  </div>
                  <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                    
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Jumbo Lump Crab Stack</a></h3>
                        <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$12.49</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Jamaican Chicken Wings</a></h3>
                        <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$15.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Bahamian Seafood Chowder</a></h3>
                        <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$10.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Grilled Chicken &amp; Tropical Fruit on Mixed Greens</a></h3>
                        <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$12.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                  </div>
                  <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                    
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Grilled Top Sirlion Steak</a></h3>
                        <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$18.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Steak Oscar</a></h3>
                        <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$23.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Skirt Steak Churrasco</a></h3>
                        <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$20.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <h3><a href="#">Grilled Beef Steak</a></h3>
                        <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p>
                      </div>
                      <div class="price order-2">
                        <strong>$20.99</strong>
                      </div>
                    </div> <!-- .menu-food-item -->

                  </div>
                </div>


              </div>
            </div>
          </div>
        </div> <!-- .section -->

          
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

    <script src="<?php echo base_url('assets/diner/js/main.js')?>"></script>
  </body>
</html>