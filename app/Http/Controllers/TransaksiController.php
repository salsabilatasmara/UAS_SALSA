<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Transaksi, Siswa, Kelas};

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::get();

        return view('apps.transaksi.index')->with('transaksi', $transaksi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kelas = Kelas::get();
        $siswa = Siswa::get();
        return view('apps.transaksi.create')->with('kelas', $kelas)
                                              ->with('siswa', $siswa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $transaksi = $request->all();
        $transaksi['user_id'] = auth()->user()->id;
        Transaksi::create($transaksi);

        return redirect()->route('transaksi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        $kelas = Kelas::get();
        $siswa = Siswa::get();
        return view('apps.transaksi.edit')->with('transaksi', $transaksi)
                                            ->with('kelas', $kelas)
                                            ->with('siswa', $siswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $transaksi = Transaksi::findOrFail($request->id);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $transaksi->update($data);
        return redirect()->route('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $transaksi = Transaksi::findOrFail($request->id);
        $transaksi->delete();

        return redirect()->back();
    }
}
