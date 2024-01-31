<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id_guru'];
    $nama = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $notelepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    

    



    // buat query
    $sql = "INSERT INTO guru1 (id_guru,nama_guru, alamat,jenis_kelamin,no_telepon,email) VALUE ('$id','$nama', '$alamat', '$jeniskelamin','$notelepon','$email')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index2.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index2.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>