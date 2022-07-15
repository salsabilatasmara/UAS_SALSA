@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Transaksi</h5></div>
            <p class="card-text">
            <form action="{{ route('transaksi') }}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 mt-2">
                    <label for="">kelas</label>
                    <select name="kelas_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($kelas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Siswa</label>
                    <select name="siswa_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($siswa as $item)
                            <option value="{{ $item->id }}">{{ $item->nisn }} - {{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control">
                </div> 
                <div class="form-group mt-2 mt-2">
                    <label for="">Jumlah</label>
                    <input type="number" name="total" class="form-control">
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