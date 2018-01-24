<?php
include "db/koneksi.php";
$data=mysql_query("select * from darah");
$op=isset($_GET['op'])?$_GET['op']:null;

if($op=='id_darah'){
    echo"<option>Kode Darah</option>";
    while($r=mysql_fetch_array($data)){
        echo "<option value='$r[id_darah]'>$r[id_darah]</option>";
    }
}elseif($op=='darah'){
    echo'<table id="darah" class="table table-hover">
    <thead>
            <tr>
                <Td colspan="5"><a href="?page=darah&act=tambah" class="btn btn-primary">Tambah darah</a></td>
            </tr>
            <tr>
                <td>Kode darah</td>
                <td>golongan darah</td>
                <td>Harga Beli</td>
                <td>Harga Jual</td>
                <td>Stok</td>
            </tr>
        </thead>';
	while ($b=mysql_fetch_array($data)){
        echo"<tr>
                <td>$b[id_darah]</td>
                <td>$b[golongan]</td>
                <td>$b[ukuran]</td>
                <td>$b[harga]</td>
                <td>$b[stok]</td>
            </tr>";
        }
    echo "</table>";
}elseif($op=='ambildata'){
    $id_darah=$_GET['id_darah'];
    $dt=mysql_query("select * from darah where id_darah='$id_darah'");
    $d=mysql_fetch_array($dt);
    echo $d['golongan']."|".$d['ukuran']."|".$d['harga']."|".$d['stok'];
}elseif($op=='cek'){
    $kd=$_GET['kd'];
    $sql=mysql_query("select * from darah where id_darah='$kd'");
    $cek=mysql_num_rows($sql);
    echo $cek;
}elseif($op=='update'){
    $id_darah=$_GET['id_darah'];
    $golongan=htmlspecialchars($_GET['golongan']);
    $beli=htmlspecialchars($_GET['beli']);
    $jual=htmlspecialchars($_GET['jual']);
    $stok=htmlspecialchars($_GET['stok']);
    
    $update=mysql_query("update darah set golongan='$golongan',
                        ukuran='$beli',
                        harga='$jual',
                        stok='$stok'
                        where id_darah='$id_darah'");
    if($update){
        echo "Sukses";
    }else{
        echo "ERROR. . .";
    }
}elseif($op=='delete'){
    $id_darah=$_GET['id_darah'];
    $del=mysql_query("delete from darah where id_darah='$id_darah'");
    if($del){
        echo "sukses";
    }else{
        echo "ERROR";
    }
}elseif($op=='simpan'){
    $id_darah=$_GET['id_darah'];
    $golongan=htmlspecialchars($_GET['golongan']);
    $jual=htmlspecialchars($_GET['jual']);
    $beli=htmlspecialchars($_GET['beli']);
    $stok=htmlspecialchars($_GET['stok']);
    
    $tambah=mysql_query("insert into darah (id_darah,golongan,ukuran,harga,stok)
                        values ('$id_darah','$golongan','$beli','$jual','$stok')");
    if($tambah){
        echo "sukses";
    }else{
        echo "error";
    }
}
?>