<html>
    <head>
        <title>Data Siswa XIRPL6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="short icon" href="images.png">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    <h1><center>Ubah Data</center></h1>
</html>

<?php
    include './koneksi2.php';
    
    $id_tugas = $_GET['id_tugas'];

    $sql = ("SELECT * FROM tugas WHERE id_tugas = '$id_tugas'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>

        <div class="container">
            <div class="row mt-5">
               
                <form action="ubah2.php" method="POST"> 
                    <input type="hidden" name="id_tugas" value="<?php echo $result['id_tugas']?>"> 
                        <div class="mb-3">
                            <label class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mapel" class="form-control" value="<?php echo $result['mapel']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $result['keterangan']?>"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="text" name="deadline" class="form-control" value="<?php echo $result['deadline']?>"></label>
                        </div>  
                        <br>             
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       
