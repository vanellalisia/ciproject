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
                        <h1>Daftar Menu</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="<?php echo 'Menu/tambahData' ?>">+ Tambah Menu</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
			
			
			
			<div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Menu</th>
                                            <th scope="col">Nama Menu</th>
                                            <th scope="col">Jenis Menu</th>
											<th scope="col">Stok</th>
                                            <th scope="col">Harga</th>
											<th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=0;
									foreach($menu as $list){ ?>
									
                                        <tr>
                                            <td><?php echo $list->id_menu ?></td>
                                            <td><?php echo $list->nama_menu ?></td>
                                            <td><?php echo $list->nama_jenis_menu ?></td>
                                            <td><?php echo $list->jumlah_stock_menu ?></td>
											<td><?php echo $list->harga_menu ?></td>
											<td>
											<a href="<?php echo base_url(). 'Menu/editData/'.$list->id_menu;?>"><i class="fa fa-edit"></i>Edit</a>
											<a href="<?php echo base_url(). 'Menu/hapusData/'.$list->id_menu;?>"><i class="fa fa-trash-o"></i>Hapus</a>
											</td>
                                        </tr>
                                        <?php
										$i++;
										} ?>
										
										
                                    </tbody>
                                </table>
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
