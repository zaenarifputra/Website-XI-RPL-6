<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dasboard</title>
    <link rel="short icon" href="images.png">

    <style>
        body{
            display: flex;
        }
        .foto,.foto0{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .foto img{
            margin-top: 10px;
            width: 70px;
            margin-left: 3px;
            border-radius: 3px;
            border: 2px solid white;
        }
        .foto0 img{
            margin-top: 3px;
            width: 120px;
            margin-left: 32%;
            border-radius: 3px;
            border: 2px solid white;
        }
        .container{
            width: 100%;
            margin-top: 10px;
            margin-left: 20%;
        }
        .judul00{
            background-color: #94A9AC;
            box-sizing: border-box;
            padding: 20px;
            border-radius: 20px;
            display: flex;
            margin-right: 27%;
        }
        
        .isi00{
            margin-left: 5%;
            background-color: #F0F9FB;
            padding: 30px;
            border-radius: 10px;
            font-family: 'Roboto', sans-serif;
            width: 80%;
        }
        .isi00 h3{
            margin-top: -20px;
            margin-left: -10px;
            font-weight: bold;  
        }
        .ico img{
            width: 30px;
        }
        
        .ico{
            background-color: #F4E0D0;
            padding: 6px;
            border-radius: 40px;
        }
        nav{
            margin-right: 5%;
        }
        
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Dasboard.php"><img src="mentahan/01.png"></a></li>
            <li><a href="struktur.php"><img src="mentahan/02.png"></a></li>
            <li><a href="mapel.php"><img src="mentahan/03.png"></a></li>
            <li><a href="tadarus.php"><img src="mentahan/04.png"></a></li>
            <li><a href="tugas.php"><img src="mentahan/05.png"></a></li>
            <li><a href="absen.php"><img src="mentahan/06.png"></a></li>
        </ul>
    </nav>    
    <div class="container">
        <div class="judul00">
            <div class="icon">
                <img class="ico" src="mentahan/robot.png">
            </div>
            <div class="isi00">
                <h3>SELAMAT PAGI SISWA XI RPL 6 !</h3>
            </div>
        </div>
        <div class="foto0">
            <img src="mentahan/siswa/0.png" width="140px">
        </div>
        <div class="foto">
            <img src="mentahan/siswa/1.png" alt="">
            <img src="mentahan/siswa/2.png" alt="">
            <img src="mentahan/siswa/3.png" alt="">
            <img src="mentahan/siswa/4.png" alt="">
            <img src="mentahan/siswa/5.png" alt="">
            <img src="mentahan/siswa/6.png" alt="">
            <img src="mentahan/siswa/7.png" alt="">
            <img src="mentahan/siswa/8.png" alt="">
            <img src="mentahan/siswa/9.png" alt="">
            <img src="mentahan/siswa/10.png" alt="">
            <br>
        </div>
        <div class="foto">
            <img src="mentahan/siswa/11.png" alt="">
            <img src="mentahan/siswa/12.png" alt="">
            <img src="mentahan/siswa/13.png" alt="">
            <img src="mentahan/siswa/14.png" alt="">
            <img src="mentahan/siswa/15.png" alt="">
            <img src="mentahan/siswa/16.png" alt="">
            <img src="mentahan/siswa/17.png" alt="">
            <img src="mentahan/siswa/18.png" alt="">
            <img src="mentahan/siswa/19.png" alt="">
            <img src="mentahan/siswa/20.png" alt="">
        </div>
        <div class="foto">
            <img src="mentahan/siswa/21.png" alt="">
            <img src="mentahan/siswa/22.png" alt="">
            <img src="mentahan/siswa/23.png" alt="">
            <img src="mentahan/siswa/24.png" alt="">
            <img src="mentahan/siswa/25.png" alt="">
            <img src="mentahan/siswa/26.png" alt="">
            <img src="mentahan/siswa/27.png" alt="">
            <img src="mentahan/siswa/28.png" alt="">
            <img src="mentahan/siswa/29.png" alt="">
            <img src="mentahan/siswa/30.png" alt="">
        </div>
        <div class="foto">
            <img src="" alt="" style="border: none;" >
            <img src="" alt="" style="border: none;" >
            <img src="mentahan/siswa/31.png" alt="">
            <img src="mentahan/siswa/32.png" alt="">
            <img src="mentahan/siswa/33.png" alt="">
            <img src="mentahan/siswa/34.png" alt="">
            <img src="mentahan/siswa/35.png" alt="">
            <img src="mentahan/siswa/36.png" alt="">
            <img src="" alt="" style="border: none;" >
            <img src="" alt="" style="border: none;" >
        </div>    
    </div>
</body>
</html>

<?php
    include './koneksi.php';

?>