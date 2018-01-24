<!DOCTYPE php>
<?php
include 'config.php'; 

if(isset($_SESSION['nip'])== 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
	header('Location: distributor.php'); 
}

?>
<html>
<head> 
<title>Bank Darah </title>
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

<script>
                //mendeksripsikan variabel yang akan digunakan
                var id_penjualan;
                var tanggal;
                var id_darah;
                var golongan;
                var harga;
                var ukuran;
                var stok;
				var jenis;
				var banyaknya;
				var id_distributor;
                $(function(){
                    //meload file pk dengan operator ambil darah dimana nantinya
                    //isinya akan masuk di combo box
                    $("#id_darah").load("pk.php","op=ambildarah");
                    
                    //meload isi tabel
                    $("#darah").load("pk.php","op=darah");
                    
                    //mengkosongkan input text dengan masing2 id berikut
                    $("#golongan").val("");
                    $("#ukuran").val("");
					$("#harga").val("");
                    $("#stok").val("");
                    $("#jenis").val("");
                    $("#banyaknya").val("");
                    
                                
                    //jika ada perubahan di Kode Darah
                    $("#id_darah").change(function(){
                        id_darah=$("#id_darah").val();
                        
                        //tampilkan status loading dan animasinya
                        $("#status").html("loading. . .");
                        $("#loading").show();
                        
                        //lakukan pengiriman data
                        $.ajax({
                            url:"proses.php",
                            data:"op=ambildata&id_darah="+id_darah,
                            cache:false,
                            success:function(msg){
                                data=msg.split("|");
                                
                                //masukan isi data ke masing - masing field
                                $("#golongan").val(data[0]);
                                $("#ukuran").val(data[1]);
                                $("#harga").val(data[2]);
                                $("#stok").val(data[3]);
                                $("#banyaknya").focus();
                                //hilangkan status animasi dan loading
                                $("#status").html("");
                                $("#loading").hide();
                            }
                        });
                    });
                    
                    //jika tombol tambah di klik
                    $("#tambah").click(function(){
						id_distributor=$("#id_distributor").val();
                        id_darah=$("#id_darah").val();
                        stok=$("#stok").val();
                        banyaknya=$("#banyaknya").val();
                        
                        if(id_darah=="Pemilihan"){
                            alert("Pilihan Harus diisi");
                            exit();
                        }else if(banyaknya > stok){
                            alert("Stok tidak terpenuhi");
                            $("#banyaknya").focus();
                            exit();
                        }else if(banyaknya < 1){
                            alert("banyaknya beli tidak boleh 0");
                            $("#banyaknya").focus();
                            exit();
                        }
                        golongan=$("#golongan").val();
                        harga=$("#harga").val();
                        
                                                
                        $("#status").html("sedang diproses. . .");
                        $("#loading").show();
                        
                        $.ajax({
                            url:"pk.php",
                            data:"op=tambah&id_distributor="+id_distributor+"&id_darah="+id_darah+"&banyaknya="+banyaknya,
                            cache:false,
                            success:function(msg){
                                if(msg=="sukses"){
									alert("Data berhasil disimpan...!"); document.location="distributor.php";
                                   
									
                                }else{
                                    $("#status").html("ERROR. . .");
                                }
                                $("#loading").hide();
                                $("#golongan").val("");
                                $("#harga").val("");
                                $("#ukuran").val("");
                                $("#stok").val("");
                                $("#banyaknya").val("");
                               
                                $("#id_darah").load("pk.php","op=ambildarah");
                                $("#darah").load("pk.php","op=darah");
                            }
                        });
                    });
                    
                    //jika tombol proses diklik
                    $("#proses").click(function(){
                        id_penjualan=$("#id_penjualan").val();
                        tanggal=$("#tanggal").val();
                        
                        $.ajax({
                            url:"pk.php",
                            data:"op=proses&id_penjualan="+id_penjualan+"&tanggal="+tanggal,
                            cache:false,
                            success:function(msg){
                                if(msg=='sukses'){
                                    $("#status").html('Transaksi Pembelian berhasil');
                                    alert('Transaksi Berhasil');
                                    exit();
                                }else{
                                    $("#status").html('Transaksi Gagal');
                                    alert('Transaksi Gagal');
                                    exit();
                                }
                                $("#id_darah").load("pk.php","op=ambildarah");
                                $("#darah").load("pk.php","op=darah");
                                $("#loading").hide();
                                $("#golongan").val("");
                                $("#harga").val("");
                                $("#ukuran").val("");
                                $("#stok").val("");
                            }
                        })
                    })
                });
            </script>
</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="undermenuarea">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c3">
			<a href="distributor.php"></br>
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
			
			<div class="grid">
			<div class="row">
			<!-- MAIN CONTENT -->
				
			<div class="c12">
				<section class="content">
				<div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Darah
                                    </h3>
                                    <p>
                                        Pesan Sekarang
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="?page=penjualan&act=tambah" class="small-box-footer">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
							
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        Buka 
                                    </h3>
                                    <p>
                                        Selesai Memilih
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-lg1">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Kirim
                                    </h3>
                                    <p>
                                        Konfirmasi
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        Lihat
                                    </h3>
                                    <p>
                                        Frofile
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Klik di sini <i class="fa fa-arrow-circle-right"></i>
                                </a>
								
                            </div>
                        </div><!-- ./col -->
                    </div>
				</section>
				
	 
					
                        				
				
				
			</div><!-- end main content -->		

		</div>
</div><!-- end grid -->


</div>
</br>
						
<div class="container">
                <?php
                include "db/koneksi.php";
                $p=isset($_GET['act'])?$_GET['act']:null;
                switch($p){
                    default:
                        echo "<table class='table table-bordered'>
                             
                                <tr>
                                    <td>No.Nota</td>
                                    <td>Tanggal</td>
                                    <td>Jumlah</td>
                                    <td>Tools</td>
                                </tr>";
                                $query=mysql_query("select * from penjualan");
                                while($r=mysql_fetch_array($query)){
                                    echo "<tr>
                                            <td><a href='?page=penjualan&act=detail&nota=$r[id_penjualan]'>$r[id_penjualan]</a></td>
                                            <td>$r[tanggal]</td>
                                            <td>$r[total]</td>
                                            <td><a href='?page=penjualan&act=detail&nota=$r[id_penjualan]'>Cetak Nota</a></td>
                                        </tr>";
                                }
                                echo"</table>";
                        
                        break;
                    case "tambah":
                        $tgl=date('Y-m-d');
                        //untuk autonumber di id_penjualan
                        $auto=mysql_query("select * from penjualan order by id_penjualan desc limit 1");
                        $no=mysql_fetch_array($auto);
                        $angka=$no['id_penjualan']+1;
                        echo "<div class='modal-body'>
						<div class='navbar-form pull-right' >
                                <label>No. Order : </label><td>
								<input class='form-control' style='width:50px;' type='text' id='id_penjualan' value='$angka' readonly > 
								<input class='form-control' type='text' id='tanggal' value='$tgl' readonly>
								</td>   
                            </div>
                            </div></br></br>
							";
                            $nip =$_SESSION['nip'];
							$data1=mysql_query("select * from distributor where nip='$nip'");
							$rr=mysql_fetch_array($data1);
				
							$id_distributor = $rr['id_distributor'];
				 
                            echo"<div class='modal-body'>
							<div class='form-group'>
							<div class='navbar-form' >
                            <td><select style='width:150px;' id='id_darah' class='form-control'></select>
                            <input style='width:50px;' class='form-control' type='text' id='golongan' placeholder='Gol' readonly>
                            <input style='width:80px;' class='form-control' type='text' id='ukuran' placeholder='Ukuran' ' readonly>
                            <input style='width:80px;' class='form-control' type='text' id='harga' placeholder='Harga' ' readonly>
                            <input style='width:50px;' class='form-control' type='text' id='stok' placeholder='Stok' readonly>
                            <input style='width:80px;' class='form-control' type='text' id='banyaknya' placeholder='JML' >                     
                            <input style='width:80px;' class='form-control' type='hidden' id='id_distributor' value='$rr[id_distributor]'  ></td></br>                         
							
							<button id='tambah' class='btn btn-danger'>Tambah</button>
                            </div>
                            </div>
                            </div>
                            <center><span id='status'></span></center></br></br>
							<div class='modal-body'>
							<div class='form-group'>
							<div class='navbar-form' >
							<span id='status'></span>
                            <table id='darah' class='table table-bordered'>
                                    
                            </table>
							
                            </div>
                            </div>
                            </div>
							<div class='modal-body'>
							<div class='form-group'>
							<div class='navbar-form' >
							<div class='form-actions'>
                                <button id='proses' class='btn btn-success'>Proses</button>
                            </div>
                            </div>
                            </div>
                            </div>";
                        break;
                    case "detail":
                        echo "<legend>Nota Penjualan</legend>";
                        $nota=$_GET['nota'];
                        $query=mysql_query("select penjualan.id_penjualan,detailpenjualan.kode,tblbarang.nama,
                                           detailpenjualan.harga,detailpenjualan.jumlah,detailpenjualan.subtotal
                                           from detailpenjualan,penjualan,tblbarang
                                           where penjualan.id_penjualan=detailpenjualan.id_penjualan and tblbarang.kode=detailpenjualan.kode
                                           and detailpenjualan.id_penjualan='$nota'");
                        $nomor=mysql_fetch_array(mysql_query("select * from penjualan where id_penjualan='$nota'"));
                        echo "<div class='navbar-form pull-right'>
                                Nota : <input type='text' value='$nomor[id_penjualan]' disabled>
                                <input type='text' value='$nomor[tanggal]' disabled>
                            </div>";
                        echo "<table class='table table-hover'>
                                <thead>
                                    <tr>
                                        <td>Kode Barang</td>
                                        <td>Nama</td>
                                        <td>Harga</td>
                                        <td>Jumlah</td>
                                        <td>Subtotal</td>
                                    </tr>
                                </thead>";
                                while($r=mysql_fetch_row($query)){
                                    echo "<tr>
                                            <td>$r[1]</td>
                                            <td>$r[2]</td>
                                            <td>$r[3]</td>
                                            <td>$r[4]</td>
                                            <td>$r[5]</td>
                                        </tr>";
                                }
                                echo "<tr>
                                        <td colspan='4'><h4 align='right'>Total</h4></td>
                                        <td colspan='5'><h4>$nomor[total]</h4></td>
                                    </tr>
                                    </table>";
                        break;
                }
                ?>
            </div>
<!-- copyright area <div class="form-actions">
                                <button id="proses" class="btn btn-default">Proses</button>
                            </div> -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Dewi Ayu Ratnasari &copy; 2017. UNMA Banten.
			</div>
			<div class="c6">
				<span class="right">
				Website UTD PMI Cabang Pandeglang </span>
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
 