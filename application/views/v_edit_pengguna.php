<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Pengguna</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Pengguna</strong> 
                    </div>
                <div class="card-body card-block">
				<?php foreach($penggunaEdit as $listPenggunaEdit){ ?>
                    <form action="<?php echo base_url().'Pengguna/updateData' ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Jabatan</label></div>
                        <div class="col-12 col-md-9">
                            <select name="jabatan" id="jabatan" class="form-control">
                                <option value="PL">Pelanggan</option>
                                <option value="PT">Petugas</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Pengguna</label></div>
                        <div class="col-12 col-md-9"><input type="text" readonly id="text-input" name="id" placeholder="" class="form-control" value="<?= $listPenggunaEdit->id_pengguna ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pengguna</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="" class="form-control"value="<?= $listPenggunaEdit->nama_pengguna ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="" class="form-control"value="<?= $listPenggunaEdit->email_pengguna ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kata sandi</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="sandi" placeholder="" class="form-control"value="<?= $listPenggunaEdit->kata_sandi ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telepon</label></div>
                        <div class="col-12 col-md-9"><input type="numbers" id="text-input" name="telp" placeholder="" class="form-control"value="<?= $listPenggunaEdit->nomor_telepon ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" placeholder="" class="form-control"value="<?= $listPenggunaEdit->alamat_pengguna ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="status" placeholder="" class="form-control"value="<?= $listPenggunaEdit->status_pengguna ?>"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Masuk</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal" placeholder="" class="form-control"value="<?= $listPenggunaEdit->tanggal_masuk ?>"></div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
					<?php } ?>  
                        
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
