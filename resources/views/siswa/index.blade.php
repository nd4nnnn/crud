@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">👨‍🎓 Data Siswa</h4>
        </div>

        <div class="card-body">

            <a href="{{ route('siswa.create') }}"
               class="btn btn-success mb-3">
               + Tambah Siswa
            </a>

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th width="60">No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($data as $no => $d)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->kelas->nama_kelas }}</td>
                    <td>{{ $d->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>

                        <!-- Edit -->
                        <a href="{{ route('siswa.edit',$d->id) }}"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                        <!-- Delete -->
                        <form action="{{ route('siswa.destroy',$d->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus data?')">
                                    Hapus
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
