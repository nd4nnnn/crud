<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h4>Tambah Siswa</h4>
    </div>

    <div class="card-body">

        <form action="/siswa" method="POST">
        @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas_id" class="form-control">
                <option value=""> Pilih Kelas </option>

                @foreach($kelas as $k)
                    <option value="{{ $k->id }}">
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>


        <button class="btn btn-success">Simpan</button>
        <a href="/siswa" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

</div>
</body>
</html>
