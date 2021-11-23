<html>
    <head>
        <title>Data Tugas Tadarus XI RPL 6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="short icon" href="images.png">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include './koneksi2.php';
   
    $id_siswa = $_POST['id_siswa'];
        
    $nama_siswa = $_POST['nama_siswa'];
    $absen = $_POST['absen'];
    $hari = $_POST['hari'];
    $tugas = $_POST['tugas'];

    $sql = "UPDATE tadarus SET nama_siswa='$nama_siswa', absen='$absen' , hari='$hari' , tugas='$tugas' WHERE id_siswa = '$id_siswa'";
    
    if($conn->query($sql) === TRUE){
        echo "<div class='alert alert-primary alert-success' role='alert'> <a href='tampil.php' >Kembali</a> <br> Ubah Data Sukses</div>";
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>