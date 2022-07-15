@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Siswa</h5>
                </div>
                <a href="{{ route('siswa.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kelas->nama }}</td>
                        <td style="width: 25%">
                        <a href="{{ route('siswa.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('siswa') }}" method="POST" style="display: inline">
                            @csrf @method('DELETE')
                            <input type="text" name="id" value="{{ $item->id }}" style="display:none">
                            <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </p>
        </div>
    </div>
</div>
@endsection