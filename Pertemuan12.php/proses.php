<?php
$nama= '';
$email= '';
$pesan= '';
$posterrors= '';
if($_SERVER['REquest_Method'] === 'POST'){
    $nama = trim($_POST['Nama']??'');
    $email = trim($_POST['email']??'');
    $pesan = trim($_POST['pesan']??'');
    //validasi sederhana
    if($nama === ''){
        $posterrors[] = 'nama Wajib Di Isi.';}
    if($email === ''){
        $posterrors[] = 'email Wajib Di Isi.';}
        elseif (!filter_var($email,filter_validate_email)){
            $posterrors[] ='format email tidak valid.';
        }
    if($pesan === ''){
        $posterrors[] = 'pesan Wajib Di Isi.';}
    if(empty($posterrors)){
        $postsuccsess = true;
        }
        
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Materi Dasar PHP - GET</title>
</head> 
<body>
    <h2>Contoh Proses Form POST</h2>
    <?php if (!empty($posterrors)):?>
    <div class="error">
        <strong>validasi Gagal</strong>
        
    </div>
    
</body>
</html>