<form action="/Simpan" Method="POST">
    @csrf
    <button type="submit">Simpan Data (POST)</button>
</form>
<form action="/update/1" method="POST">
    @csrf
    @method('put')
    <button type="submit">Update Data(PUT)</button>
</form>
<form action="/update2/2"method="POST">
    @csrf
    @method('put')
    <button type="Submit">Update Data(PATCH)</button>
</form>
<form action="hapus/1"method="POST">
    @csrf
    @method('put')
    <button type="Submit">Hapus Data(delete)</button>
</form>