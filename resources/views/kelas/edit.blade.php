<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>

```
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
```

</head>
<body style="background-color:#f4f6f9;">

<div class="container mt-5">

```
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header bg-primary text-white rounded-top-4">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square"></i>
                    Edit Data Kelas
                </h5>
            </div>

            <div class="card-body p-4">

                <form action="{{ route('kelas.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Nama Kelas -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Nama Kelas
                        </label>
                        <input type="text"
                               name="nama_kelas"
                               value="{{ $data->nama_kelas }}"
                               class="form-control rounded-3"
                               placeholder="Masukkan nama kelas"
                               required>
                    </div>

                    <!-- Jurusan -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Jurusan
                        </label>
                        <input type="text"
                               name="jurusan"
                               value="{{ $data->jurusan }}"
                               class="form-control rounded-3"
                               placeholder="Masukkan jurusan"
                               required>
                    </div>

                    <!-- Button -->
                    <div class="d-flex justify-content-between">

                        <a href="{{ route('kelas.index') }}"
                           class="btn btn-secondary rounded-3">
                           <i class="bi bi-arrow-left"></i>
                           Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-primary rounded-3">
                            <i class="bi bi-save"></i>
                            Update
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
</div>
```

</div>

</body>
</html>
