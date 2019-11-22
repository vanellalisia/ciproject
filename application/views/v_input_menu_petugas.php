<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->


<script>

$(document).ready(function() {

  $('#id_menu').change(function() {

    var id_menu = $(this).val();

    $.ajax({

      type: 'POST',

      url: "http://localhost/web2Kantin/ciproject/Menu/getMenuByAjax",

	  dataType : "JSON",

	  data : {id_menu:id_menu},

      success: function(data){
		  
		  

                 $.each(data,function(){

				$('[name="id_menu]').val(data.id_menu);


				});
			}
		});

	});
	
	
});

</script>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/selectFX/css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/jqvmap/dist/jqvmap.min.css')?>">


    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

    <link href='<?php echo base_url('assets/css/css.css')?>' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <?php include ('sidebar.php')?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include ('headerbar.php')?><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Menu</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="<?php echo 'insertData' ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Menu</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="jenis" id="jenis" class="form-control">
                                            <option value="MK">Makanan</option>
                                            <option value="MN">Minuman</option>
                                            <option value="SK">Snack</option>
                                            <script>
                                            $("#select").change(function(){
                                              //  $menu = $(this).val();
                                                //$menu="a";
                                                $("#id").value('apa');
                                            });
                                            </script>               
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Menu</label></div>
                                    <div class="col-12 col-md-9"><input type="varchar" id="id" name="id" placeholder="" class="form-control"  
                                    value=""></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Menu</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stok</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="stok" placeholder="" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Harga</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="harga" placeholder="" class="form-control"></div>
                                </div>
                                                    
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary btn-sm">                               
                        </div>
                        </form>
                    </div>
                                                
                </div>
        
            </div>
        </div>    
			
				
				
				
				
				
				
				
				
            </div>
			
			
            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>


    <script src="<?php echo base_url('assets/vendors/chart.js/dist/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dashboard.js')?>"></script>
    <script src="<?php echo base_url('assets/js/widgets.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/jquery.vmap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
	
	

</body>

</html>
