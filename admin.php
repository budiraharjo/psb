<!DOCTYPE php>
<?php
include 'config.php'; 

if(isset($_SESSION['username'])== 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
	header('Location: login.php'); 
}

?>
<html>
<head> 
<title>SMK KBM </title>
<link rel="icon" href="images/logo.png" type="image/png">
<!-- STYLES & JQUERY 
================================================== -->
        <link href="assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
  
    <link href="css/sb-admin.css" rel="stylesheet">
	 <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         
<link rel="stylesheet" type="text/css" href="css/css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->

</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="undermenuarea">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c3">
			<a href="admin.php"></br>
			<img src="images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c6"></br>
		<center><img src="images/garisan.png" width="250px" class="logo" alt="Logout"></center>
		</div>
		<div class="c3">
			<nav id="topNav">
			<a href="logout.php"></br><li><img src="images/logout.png" height="50px" align="right" class="logo" alt="Logout"> </a></li>
			</nav>
		</div>
	</div>
</div>
			
			
			<section class="content">
			<div class="row">
			 
				
			<section class="col-lg-4 connectedSortable">
				<div class="row">
                        <div class="col-lg-6 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        SMK
                                    </h3>
                                    <p>
                                        Karya Bakti Mandiri 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-card"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
							
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-6 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        SMK 
                                    </h3>
                                    <p>
                                        Karya Bakti Mandiri
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg1" >
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						 
					</div>
					<div class="row">	
                        <div class="col-lg-6 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        SMK
                                    </h3>
                                    <p>
                                        Karya Bakti Mandiri
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-navigate"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg2">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-6 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        SMK
                                    </h3>
                                    <p>
                                        Karya Bakti Mandiri
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-loop"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg3">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
								
                            </div>
                        </div><!-- ./col -->
                    </div>
					<div class="row">	
                        <div class="col-lg-6 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>
                                        SMK
                                    </h3>
                                    <p>
                                        Karya Bakti Mandiri
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-key"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg4">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-6 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                        SMK
                                    </h3>
                                    <p>
                                        Karya Bakti Mandiri
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-compose"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg5">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
								
                            </div>
                        </div><!-- ./col -->
                    </div>
			</section><!-- end main content -->		
		
					<section class="col-lg-8 connectedSortable">
							  <div class="box box-info" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
									<a href="admin.php">
                                        <button class="btn btn-info btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>
                                    </a>
									</div><!-- /. tools -->
                                    <i class="fa fa-cloud"></i>

                                <h3 class="box-title">Daftar Calon Siswa</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                <div class="row">
                                <div class="col-sm-12">
								
								<?php
        if(isset($_GET['code']))
        {
            if($_GET['code']==1)
                echo "<h3 style='color:green'>Data pendaftar berhasil disimpan</h3>";
            elseif($_GET['code']==2)
                echo "<h3 style='color:red'>Terjadi kesalahan</h3>";
            elseif($_GET['code']==3)
                echo "<h3 style='color:blue'>Data pendaftar berhasil dihapus</h3>";
        }
    ?>
<table class="table">
    <tr>
        <th width="5%">
            No.
        </th>
      
        <th>
            Nama pendaftar
        </th>
		<th>
            Jenis kelamin
        </th>
		<th>
            Jurusan Yang Dipilih
        </th>
         <th>
            Status
        </th>
        <th>
        </th>
    </tr>
    <?php
	$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "db_siswa";

$koneksi = mysql_connect ($servername,$user, $pasword)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysql_select_db ($db)
			or die ('gagal terhubung ke database'.mysql_error());
      
mysql_connect("localhost", "root", "");
mysql_select_db("db_siswa");

	  if(!isset($_GET['data']))
        $exec=mysql_query("select * from calon_siswa ");
        else{
            $data=trim(addslashes($_GET['data']));
            $exec=mysql_query("select * from calon_siswa where no_calon like '%".$data."%' or nama like '%".$data."%'");
        }
            
        $no=0;
        while($r=mysql_fetch_array($exec))
        
        {
            $no++;

    ?>
    <tr>
        <td width="5%">
            <?php echo $no; ?>
        </td>
     
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r[1]; ?></span>
        </td>
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r['jk']; ?></span>
        </td>
        <td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r['asl_sklh']; ?></span>
        </td>
		<td>
            <span class="data-1-<?php echo $no; ?>"><?php echo $r['status_daftar']; ?></span>
        </td>
		
        <td>
						<?php
						$dr = $r['status_daftar'];						
						if ($dr == 'Diterima' OR $dr == 'Ditolak'): 
						echo '<a href="keterangan.php"><button type="button" class="btn btn-warning"><span class="fa fa-user"></span> Terima</button></a>'; 
						else:
						echo '<a href="terima.php?kdpendaftar='.$r['no_calon'].'"><button type="button" class="btn btn-warning"><span class="fa fa-user"></span> Terima</button></a>';
						endif;
						?>
						
						<?php
						$dr = $r['status_daftar'];						
						if ($dr == 'Diterima' OR $dr == 'Ditolak'): 
						echo '<a href="keterangan.php"><button type="button" class="btn btn-danger"><span class="fa fa-user"></span> Tolak</button></a>'; 
						else:
						echo '<a href="tolak.php?kdpendaftar='.$r['no_calon'].'"><button type="button" class="btn btn-danger"><span class="fa fa-user"></span> Tolak</button></a>';
						endif;
						?>
             </a>&nbsp;<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $r[0]; ?>">Detail</button>

 <div class="modal fade bs-example-modal-lg<?php echo $r[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped" width="100%">
          <tr>
            <th width="25%">Nama</th>
            <td width="1%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r['nm_calon']; ?></span></td>
          </tr><tr>
            <th width="25%">Jenis Kelamin</th>
            <td width="1%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r['jk']; ?></span></td>
          </tr><tr>
            <th width="25%">Jurusan Yang Dipilih</th>
            <td width="1%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r['kd_jur']; ?></span></td>
          </tr><tr>
            <th width="25%">Tempat Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r['tmpt_lhr']; ?></span></td>
          </tr><tr>
            <th width="25%">Tanggal Lahir</th>
            <td width="1%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r['tgl_lhr']; ?></span></td>
          </tr>  
		  <tr>
            <th width="25%">Alamat</th>
            <td width="1%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r['alamat']; ?></span></td>
          </tr>
		  <tr>
            <th width="25%">Nama Ortu</th>
            <td width="1%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r['nm_ortu']; ?></span></td>
          </tr>
          <tr>
            <th width="25%">Pekerjaan Ayah</th>
            <td width="1%"> : </td>
            <td> <?php echo $r['pekerjaan_ortu']; ?></td>
          </tr>
          <tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td> <?php echo $r['agama']; ?></td>
          </tr>
        
      
      
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        </td>
    </tr>
    <?php
        }
    ?>

</table>
										 
										
					
			</div>
			</div>
			</div>
					</section> 
			</section>
		
		
 <!-- end grid -->


						
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Menu Belum Tersedia</center></h4>
      </div>
	
                
				<!-- <div class='form-actions'>
                                <button id='proses' class='btn btn-success'>Proses</button>
                            </div> -->
	  
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Menu Belum Tersedia</center></h4>
      </div>
	  
	  
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Menu Belum Tersedia</center></h4>
      </div>
	  
	  
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Menu Belum Tersedia</center></h4>
      </div>
	
	  
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Menu Belum Tersedia</center></h4>
      </div>
	  
	  
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Menu Belum Tersedia</center></h4>
      </div>
	 
	  
    </div>
  </div>
</div>

</div>

<script src="js/modernizr-latest.js"></script>
<script src="js/common.js"></script>
<script src="js/jquery.cycle.js"></script>
<script src="js/jquery.tweet.js"></script>
	  <script src="js/jquery.js"></script>

 
    <script src="js/bootstrap.min.js"></script>	 
       
        <script src="assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>       
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
</body>
</html>
 