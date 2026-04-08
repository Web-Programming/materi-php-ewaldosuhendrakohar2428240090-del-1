<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Materi Dasar PHP - GET</title>
</head>
<body>
    <h2>Contoh Post</h2>
    <form action="proses.php" method="POST">
        <label for="nama">Nama</label>
        <input id= "nama" name="nama" type="text" placeholder="Nama Anda">
        <br/>
        <label for="email">Email</label>
        <input id= "email" name="email" type="text" placeholder="Nama@email.com">
        <br/>
        <label for="pesan">pesan</label>
        <input id= "pesan" name="pesan" type="text"paaceholder="isi pesan anda">
        <br/>
        <button type="submit">Kirim (POST)</button>
    </form>

</body>
</html>