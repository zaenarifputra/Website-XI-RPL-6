<html>
    <head>
        <title>Data Tugas Tadarus XI RPL 6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="short icon" href="images.png">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



<?php
    include './koneksi2.php';

    if(isset($_GET['cari-siswa'])) {
        include "./cari.php";
    }

    echo 
    
    "
    <div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-white'>
                <div class='container-fluid'>
                    <h1>Data Tugas Tadarus Siswa</h1>                   
                    <a href='index.php'>
                        <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                        Tambah Data Siswa
                        </button>
                    </a>
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Siswa'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                </div>
            </nav>
        </div>
    </div>";
       

    $sql = "SELECT * FROM tadarus";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        
        echo 
        "<br>
        <div class='container'>
         
                  

                    <div class='card' style='width: 100%;'>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'><h6>Nama Siswa :</h6>  $baris[1]</li>
                            <li class='list-group-item'><h6>Absen :</h6> $baris[2]</li>
                            <li class='list-group-item'><h6>Hari & Tanggal :</h6> $baris[3]</li>
                            <li class='list-group-item'><h6>Tugas :</h6> $baris[4]</li>
                            <li class='list-group-item'><h6><a href='ubah_data.php?id_siswa=$baris[0]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id_siswa=$baris[0]' class='btn btn-warning btn-sm'>Hapus</a></li>
                        </ul>
                    </div>    
        </div>  
        ";
        
        $a++;
        
    }
    $conn->close();
    

?>