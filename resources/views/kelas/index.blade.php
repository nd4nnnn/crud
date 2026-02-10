@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">📚 Data Kelas</h2>

    <a href="{{ route('kelas.create') }}"
       class="btn btn-success mb-3">
       + Tambah Kelas
    </a>

    <div class="card shadow">

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th width="60">No</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama_kelas }}</td>
                        <td>{{ $d->jurusan }}</td>
                        <td>

                            <!-- Edit -->
                            <a href="{{ route('kelas.edit',$d->id) }}"
                               class="btn btn-warning btn-sm">
                               Edit
                            </a>

                            <!-- Delete -->
                            <form action="{{ route('kelas.destroy',$d->id) }}"
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
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            Data kelas belum ada
                        </td>
                    </tr>
                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
