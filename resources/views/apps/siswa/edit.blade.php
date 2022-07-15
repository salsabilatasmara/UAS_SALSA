@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data siswa</h5></div>
            <p class="card-text">
            <form action="{{ route('siswa') }}" method="POST">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{ $siswa->id }}" >
                <div class="form-group mt-2 mt-2">
                    <label for="">NISN</label>
                    <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="form-control">
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}">
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Kelas</label>
                    <select name="kelas_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $siswa->kelas_id)
                                    selected
                                @endif>{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>         
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
        
    </div>
</div>
@endsection