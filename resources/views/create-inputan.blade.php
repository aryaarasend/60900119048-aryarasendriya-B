<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Masukan Judul</h2>
    <hr>
    <form method="POST" action="/biodata">
    @csrf
    <div class="form-group">
        <label for="Nama">Nama :</label>
        <input type="text" class="form-control" id="Nama" name="Nama">
    </div>
    <div class="form-group">
        <label for="Nim">NIM :</label>
        <input type="text" class="form-control" id="Nim" name="Nim">
    </div>
    <div class="form-group">
        <label for="Jenis-Kelamin">Jenis Kelamin :</label>
        <select name="Jenis-Kelamin" id="Jenis-Kelamin" class="form-control">
        <option value="pria">pria</option>
        <option value="wanita">wanita</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Tgl-lahir">Tanggal Lahir :</label>
        <input type="date" class="form-control" id="Tgl-lahir" name="Tgl-lahir">
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat Email :</label>
        <input type="text" class="form-control" id="Alamat" name="Alamat">
    </div>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
</form>
</body>
</html>