<?php
include("../conn/conn.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['jabatan'], $_POST['keperluan'], $_POST['tanggal'], $_POST['yangdikunjungi'])) {
        $name = $_POST['name'];
        $jabatan = $_POST['jabatan'];
        $keperluan = $_POST['keperluan'];
        $tanggal = $_POST['tanggal'];
        $yangdikunjungi = $_POST['yangdikunjungi'];
        try {
            $stmt = $conn->prepare("INSERT INTO tbl_guest (name, jabatan, keperluan, tanggal, yangdikunjungi) VALUES (:name, :jabatan, :keperluan, :tanggal, :yangdikunjungi)");            
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":jabatan", $jabatan, PDO::PARAM_STR);
            $stmt->bindParam(":keperluan", $keperluan, PDO::PARAM_STR);
            $stmt->bindParam(":tanggal", $tanggal, PDO::PARAM_STR);
            $stmt->bindParam(":yangdikunjungi", $yangdikunjungi, PDO::PARAM_STR);
            $stmt->execute();
            echo "
                <script>
                    alert('Guest Sucessfully Added!');
                    window.location.href = 'http://localhost/tamu_buku/guest-list.php/';
                </script>
                ";
            exit();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    } else {
        echo "
            <script>
                alert('Please fill in all fields!');
                window.location.href = 'http://localhost/tamu_buku/guest-form.php/';
            </script>
        ";
    }
}
?>
