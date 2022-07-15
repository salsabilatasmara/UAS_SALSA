@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Kelas</h5></div>
            <div class="card-text">
                <a href="{{ route('kelas.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($kelas as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td style="width: 25%">
                            <a href="{{ route('kelas.edit', $item->id) }}">
                                <button class="btn btn-sm btn-warning">Edit</button>
                            </a>
                            <form action="{{ route('kelas') }}" method="POST" style="display: inline">
                                @csrf @method('DELETE')
                                <input type="text" name="id" value="{{ $item->id }}" style="display:none">
                                <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection