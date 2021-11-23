<html>
    <head>
        <title>Data Siswa XIRPL6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="short icon" href="images.png">
    </head>
    <body>
        <div class="container">
            <div class='row'>
                <nav class='navbar navbar-light bg-white'>
                    <div class='container-fluid'>
                        <h1>Input Tadarus</h1>                   
                        <a href='tampil.php'>
                            <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                            Tampil Data Siswa Tadarus
                            </button>
                        </a>
                    </div>
                 </nav>
            <div class="row mt-5">
                <form action="simpan.php" method="POST">               
                        <div class="mb-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Absen</label>
                            <input type="text" name="absen" class="form-control"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hari & Tanggal</label>
                            <input type="text" name="hari" class="form-control"></label>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Tugas</label>
                            <input type="text" name="tugas" class="form-control"></label>
                        </div>
                    <button name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       
        <br>   

        <div class="container">
            <div class='row'>
                <nav class='navbar navbar-light bg-white'>
                    <div class='container-fluid'>
                        <h1>Input Tugas</h1>                   
                        <a href='tampil3.php'>
                            <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                            Tampil Tugas Siswa
                            </button>
                        </a>
                    </div>
                 </nav>
            <div class="row mt-5">
                <form action="simpan2.php" method="POST">               
                        <div class="mb-3">
                            <label class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mapel" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterengan</label>
                            <input type="text" name="keterangan" class="form-control"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="text" name="deadline" class="form-control"></label>
                        </div>  
                    <button name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>
        <br>
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>