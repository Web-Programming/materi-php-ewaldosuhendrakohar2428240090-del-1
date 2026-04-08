<?php
// ___________
//  Conto

$keyword = trim($_GET['kategori'] ??'');
$kategori = trim($_GET['kategori']??'');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Materi Dasar PHP - GET</title>
</head>
<body>
    <h2> Contoh Form GET </h2>
    <form method="GET"action="">
        <label for="Keyword">Keyword pencarian</label>
        <input type="text" name="keyword" id="keyword">
        value="<?=htmlspecialchars($keyword, ENT_quotes, 'UTF-8')?>"
        placeholder= "contoh: laptop">

        <label for="kategori">kategori</label>
        <select name="kategori" id="kategori">
            <option value="semua" <?= kategori === 'semua' ? 'selected' : '' =?>>semua</option>
            <option value="elektronik" <?= $kategori === 'elektronik' ? 'selected': ''=?>>elektronik</option>
            <option value="makanan" <?= $kategori === 'makanan' ? 'selected': ''=?>>makanan</option>
            <option value="pakaian" <?= $kategori === 'pakaian' ? 'selected': ''=?>>pakaian</option>
        </select>
        <button type= "submit">cari</button>
    </form>
    <?php if (isset($_GET['keyword'])||isset($_GET['kategori'])): ?>
        <div class= "result">
            <strong>Hasil Get:</strong><br>
            keyword:<?= htmlspecialchars($keyword, ENT_quotes, 'UTF-8')?><br>
            kategori:<?= htmlspecialchars($keyword, ENT_quotes, 'UTF-8')?>
            keyword2:<?php echo $keyword?><br>
        </div>
        <?php endif; ?>
        <h2>2> <a href="index2.php">Contoh Form Post</a></h2>
    </body>
    </html>