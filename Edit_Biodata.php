<h3> Form Edit Data Biodata</h3>
<hr>
<?php
include "koneksi.php";
$sqlEdit=mysqli_query($konek, "SELECT * FROM biodata WHERE nama='$_GET[nama]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form method="post" action="">
    <table>
    <tr>
        <td>Nama</td>
        <td><input type="text"name="txtnama" value="<?php 
        echo $e['nama']; ?>"></td>
        </tr>
        <tr>
    <td>Tempat Lahir</td>
    <td><input type="text" name="txttempatlahir" size="20" value="<?php
    echo $e['tempatlahir'];?>"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="txttanggallahir" size="20" value="<?php
         echo $e['tanggallahir'];?>"></td>
        </tr>
        <tr>
    <td>alamat</td>
    <td><input type="text" name="alamat" size="20" value="<?php
    echo $e['alamat'];?>"></td>
    </tr>
    <tr>
          <td>Agama</td>
            <td><input type="text" name="agama" size="20" value="<?php
            echo $e['agama'];?>"></td>
             </tr>
             <tr>
    <td></td>
    <td><input type="submit" value="simpan"></td>
    </tr>
    </table>
    </form>
<?php

if($_SERVER['REQUEST_METHODE']=='POST'){
    $update=mysqli_query($konek, "UPDATE biodata SET tempatlahir='$_POST[txttempatlahir]',
                                tanggallahir='$_POST[txttanggallahir]',
                                alamat='$_POST[txtalamat]',
                                agama='$_POST[txtagama]',
                                WHERE nama='$_POST[txtnama]'");
if($update){
    header('location:data.php');
}else{
    echo "Gagal Mengupdate data..!!";}
}
?>
