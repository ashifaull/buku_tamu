<?php include ("./conn/conn.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-3" href="">Buku Tamu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/tamu_buku/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/tamu_buku/guest-form.php/">Tambahkan Tamu</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/tamu_buku/guest-list.php/">Daftar tamu</a>
                </li>
            </ul>
        </div>
    </nav>  
    <div class="main"> 
        <div class="list-container">
            <div class="card-container">
                <?php               
                $stmt = $conn->prepare("SELECT * FROM tbl_guest");
                $stmt->execute();
                $result = $stmt->fetchAll();
                foreach ($result as $row) {
                    $guestID = $row["tbl_guest_id"];
                    $name = $row["name"];
                    $jabatan = $row["jabatan"];
                    $keperluan = $row["keperluan"];
                    $tanggal = $row["tanggal"];
                    $yangdikunjungi = $row["yangdikunjungi"];
                    ?>     
                    <div class="card">
                        <div class="card-body">
                            <input type="text" value="<?= $guestID ?>" id="<?= $guestID ?>" hidden>
                            <h3 class="card-title" id="name-<?= $guestID ?>"><?= $name ?></h3>
                            <h5 class="card-subtitle mb-2 text-muted" id="jabatan-<?= $guestID ?>"><?= $jabatan ?></h5>
                            <h5>Pesan:</h5>
                            <p class="card-text" id="keperluan-<?= $guestID ?>"><?= $keperluan ?></p>
                            <h6>tanggal: <span  id="tanggal-<?= $guestID ?>"><?= $tanggal ?></span></h6>
                            <h6>yang dikunjungi: <span id="yangdikunjungi-<?= $guestID ?>"><?= $yangdikunjungi ?></span></h6>
                        </div>
                    </div>      
                    <?php }  ?>    
            </div>
    </div>
    <script src="../assets/script.js"></script>
</body>
</html>