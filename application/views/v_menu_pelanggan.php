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
                <p align="center"> untuk <?php echo date("l "."d/m/Y", strtotime("tomorrow")); ?></p>
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
                <form method="POST" action="<?php echo base_url().'Menu_Pelanggan/ambil_pesanan_menu' ?>">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                    <?php
                    $i = 1;
                    foreach($makanan as $list){ ?>
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <input type="hidden" name="id_menu<?=$i?>" value="<?php echo $list->id_menu?>">
                        <input type="hidden" name="nama_menu<?=$i?>" value="<?php echo $list->nama_menu?>">
                        <input type="hidden" name="harga_menu<?=$i?>" value="<?php echo $list->harga_menu?>">
                        <h3><?php echo $list->nama_menu ?></h3>

                        <p>Jumlah stok : <?php echo $list->jumlah_stock_menu ?></p>
                      </div>
                      <div class="price order-2">
                        <strong><?php echo $list->harga_menu ?></strong>
                        <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select id="pesanbanyakmakanan" name="pesanbanyakmakanan<?=$i?>" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                      </div>
                      
                    </div> <!-- .menu-food-item -->
                    <?php 
                  $i++;
                  } ?>
                  </div>

                  <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                   <?php 
                   $j=0;
                   foreach($minuman as $list){ ?>
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <input type="hidden" name="id_menu" value="<?php echo $list->id_menu?>">
                        <input type="hidden" name="nama_menu" value="<?php echo $list->nama_menu?>">
                        <input type="hidden" name="harga_menu" value="<?php echo $list->harga_menu?>">
                        <h3><a href="#"><?php echo $list->nama_menu ?></a></h3>
                        <p>Jumlah stok : <?php echo $list->jumlah_stock_menu ?> </p>
                      </div>
                      <div class="price order-2">
                        <strong><?php echo $list->harga_menu ?></strong>
                        <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select id="pesanbanyakminuman" name="pesanbanyakminuman<?=$j?>" class="form-control">
                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                      </select>
                      </div>
                   </div>
                    </div> <?php $j++; } ?><!-- .menu-food-item -->

                  </div>
                  <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                  <?php foreach($snack as $list){ ?>
                    <div class="d-block d-md-flex menu-food-item">
                      <div class="text order-1 mb-3">
                        <input type="hidden" name="id_menu[]" value="<?php echo $list->id_menu?>">
                        <h3><a href="#"><?php echo $list->nama_menu ?></a></h3>
                        <p>Jumlah stok : <?php echo $list->jumlah_stock_menu ?> </p>
                      </div>
                      <div class="price order-2">
                        <strong><?php echo $list->harga_menu ?></strong>
                        <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select id="pesanbanyaksnack" name="pesanbanyaksnack[]" class="form-control">
                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                      </select>
                      </div>
                  </div>
                    </div> <?php } ?><!-- .menu-food-item -->

                  </div>
                </div>
                <input type="submit" value="Pesan" class="btn btn-primary">

              </div>
            </div>
          </div>
        </div> <!-- .section -->
                  </form>
          
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