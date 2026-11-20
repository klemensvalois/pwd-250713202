<?php
    echo "<h1>Pendaftaran Konsultasi</h1>";
    echo '<form method="POST" action="">
            <p>Nama      : <br /> <input type="text" name="nama" /></p>
            <p>Penyakit : <br /> <input type="text" name="penyakit" /></p>
            <p>Sesi: <br /></p>
            <select id="sesi" name="sesi">
                <option>sesi 1</option>
                <option>sesi 2</option>
            </select>
            <button type="submit">Kirim</button>
          </form>';

    if(empty($nama) || empty($penyakit) || empty($sesi)){
        $message[] = "Harap lengkapi semua data.";
    }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nama = $_POST['nama'];
        $id = $_POST['penyakit'];
        $keluhan = $_POST['sesi'];
        echo "Pasien " . htmlspecialchars($nama) . " / " . htmlspecialchars($id) . " memiliki keluhan: " . htmlspecialchars($keluhan);
    }else{
        echo "Silakan lengkapi formulir di atas";
    }
?>