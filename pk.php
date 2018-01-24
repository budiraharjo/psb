<?php
include 'config.php'; 

if(isset($_SESSION['nip'])== 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
	header('Location: distributor.php'); 
}

?>
<?php
include "db/koneksi.php";
$op=isset($_GET['op'])?$_GET['op']:null;
if($op=='ambildarah'){
    $data=mysql_query("select * from darah");
    echo"<option>Golongan dan Ukuran</option>";
    while($r=mysql_fetch_array($data)){
        echo "<option value='$r[id_darah]'>$r[golongan], $r[ukuran]</option>";
    }
}elseif($op=='ambildata'){
    $id_darah=$_GET['id_darah'];
    $dt=mysql_query("select * from darah where id_darah='$id_darah'");
    $d=mysql_fetch_array($dt);
    echo $d['golongan']."|".$d['harga']."|".$d['stok'];
}elseif($op=='darah'){
	
	$nip =$_SESSION['nip'];
	$data1=mysql_query("select * from distributor where nip='$nip'");
	$rr=mysql_fetch_array($data1);			
	$id_distributor = $rr['id_distributor'];
    
	$brg=mysql_query("select * from keranjang where id_distributor='$id_distributor' ");

	
	if(mysql_num_rows($brg) >= 1 ){
	
	
    
	
	
    echo "<thead>
            <tr>
                <td>Id Keranjang</td>
                <td>Id Distributor</td>
                <td>Id Darah</td>
                <td>Jumlah Order</td>
				<td>Subtotal</td>
                <td>Tools</td>
            </tr>
        </thead>";
	
	$jumlah=mysql_fetch_array(mysql_query("select sum(total) as jumlah from keranjang where id_distributor='$id_distributor' "));	
	while($r=mysql_fetch_array($brg)){	
	
		echo"<tr>
				<td>$r[id_keranjang]</td>
                <td>$r[id_distributor]</td>
                <td>$r[id_darah]</td>
                <td>$r[banyaknya]</td>
				<td> $r[total] </td>
                <td><a href='pk.php?op=hapus&id_keranjang=$r[id_keranjang]' id='hapus'>Hapus</a></td>
            </tr>";
	
	}
	echo "<tr>
        <td colspan='3'>Total</td>
        <td colspan='4'>$jumlah[jumlah]</td>
    </tr>";
	}else {
	echo "<tr><td>Anda belum memilih pemesanan darah... </td></tr>";
    }
}elseif($op=='tambah'){
	
	$id_darah=$_GET['id_darah'];
	
	$getih2=mysql_query("select * from darah where id_darah='$id_darah' ");
	while($r22=mysql_fetch_array($getih2)){	
	$harga = $r22['harga'];				
	$id_darah=$_GET['id_darah'];
	$banyaknya=$_GET['banyaknya'];
    $id_distributor = $_GET['id_distributor'];
    $j_harga2 = $harga * $banyaknya;
	
    $tambah=mysql_query("INSERT into keranjang (id_keranjang,id_distributor,id_darah,banyaknya,total)
                        values ('','$id_distributor','$id_darah','$banyaknya','$j_harga2')");
    
    }
	if($tambah){
        echo "sukses";
    }else{
        echo "ERROR";
    }
}elseif($op=='hapus'){
    $id_keranjang=$_GET['id_keranjang'];
    $del=mysql_query("delete from keranjang where id_keranjang='$id_keranjang'");
    if($del){
        echo "<script>window.location='distributor.php';</script>";
    }else{
        echo "<script>alert('Hapus Data Berhasil');
            window.location='distributor.php';</script>";
    }
}elseif($op=='proses'){
    $id_penjualan=$_GET['id_penjualan'];
    $tanggal=$_GET['tanggal'];
    $to=mysql_fetch_array(mysql_query("select sum(subtotal) as total from keranjang"));
    $tot=$to['total'];
    $simpan=mysql_query("insert into penjualan(id_penjualan,tanggal,total)
                        values ('$id_penjualan','$tanggal','$tot')");
    if($simpan){
        $query=mysql_query("select * from keranjang");
        while($r=mysql_fetch_row($query)){
            mysql_query("insert into detailpenjualan(id_penjualan,id_darah,harga,ukuran,subtotal)
                        values('$id_penjualan','$r[0]','$r[2]','$r[3]','$r[4]')");
            mysql_query("update darah set stok=stok-'$r[3]'
                        where id_darah='$r[0]'");
        }
        //hapus seluruh isi tabel sementara
        mysql_query("truncate table keranjang");
        echo "sukses";
    }else{
        echo "ERROR";
    }
}
?>