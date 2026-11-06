<?php
$menu = $_GET['menu'] ?? '';

$halaman = [
    'P' => 'pendaftaran.php',
    'B' => 'belanja.php',
];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset-UTF-8" />
        <title>Apotek Healty</title>
    </head>
    <body>
        <h1>Sistem Menu Apotek Healty</h1>

        <div style="border: 0.1px solid #000; padding: 3px;">
            <a href="?menu=P" style="text-decoration: none;">Pendaftaran Pasien</a>
        </div>
        <div style="border: 0.1px solid #000; padding: 3px;">
            <a href="?menu=P" style="text-decoration: none;">Belanja</a>
        </div>

        <div id="konten">
            <?php
            if(is_string($menu) && isset($halaman[$menu])){
                require __DIR__ . DIRECTORY_SEPARATOR . $halaman[$menu];
            }else{
                echo '<p>Silakan pilih menu di atas.</p>';
            }
            ?>
        </div>
    </body>
</html>
