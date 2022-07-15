@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Transaksi</h5>
                </div>
                <a href="{{ route('transaksi.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Siswa</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($transaksi as $item)
                    <tr>
                        <td>{{ $item->siswa->nama }}</td>
                        <td>{{ $item->siswa->kelas->nama }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ number_format($item->total) }}</td>
                        <td style="width: 25%">
                        <a href="{{ route('transaksi.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('transaksi') }}" method="POST" style="display: inline">
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