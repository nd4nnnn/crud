<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">
    <div class="card-header bg-warning">
        <h4>Edit Siswa</h4>
    </div>

    <div class="card-body">

        <form action="/siswa/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama"
                   value="{{ $data->nama }}"
                   class="form-control">
        </div>

        <div>
            <label>Nama Kelas</label>
        <select name="kelas_id" class="form-control">
        @foreach($kelas as $k)
        <option value="{{ $k->id }}"
            {{ $data->kelas_id == $k->id ? 'selected' : '' }}>
            {{ $k->nama_kelas }}
        </option>
        @endforeach

        </select>
        </div>

        <div><br>
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
        <option value="L" {{ $data->jk == 'L' ? 'selected' : '' }}>
            Laki-laki
        </option>
        <option value="P" {{ $data->jk == 'P' ? 'selected' : '' }}>
            Perempuan
        </option>
            </select>
        </div>


        <div class="mb-3"><br>
            <label>Alamat</label>
            <textarea name="alamat"
                      class="form-control">{{ $data->alamat }}</textarea>
        </div>

        <button class="btn btn-warning">Update</button>
        <a href="/siswa" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

</div>
</body>
</html>
