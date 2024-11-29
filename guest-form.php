<?php include ("./conn/conn.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu </title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-3" href="http://localhost/tamu_buku/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</head>
<body> 
    <div class="main"> 
            <form action="../endpoint/add-guest.php" method="POST">
                <div class="form-header">
                    <h1 class="text-center">Buku Tamu digital</h1>
                </div>
                <h3>Silahkan Isi Daftar Tamu</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="jabatan">jabatan:</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="keperluan">keperluan:</label>
                    <textarea class="form-control" id="keperluan" name="keperluan" rows="5"></textarea>
                </div>
                <h3>Waktu</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="tanggal">tanggal:</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="yangdikunjungi">Yang dikunjungi:</label>
                    <input type="text" class="form-control" id="yangdikunjungi" name="yangdikunjungi">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Enter</button>
            </form>           
        </div>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>