<?php
include "koneksi.php";
$hapus=mysqli_query($konek,"DELETE FROM biodata WHERE nama='$_GET[nama]'");

if($hapus){
        header('location:data.php');
}else{
    echo "Gagal Menghapus Data.!!";
}
?>
