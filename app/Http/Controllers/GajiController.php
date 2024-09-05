<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;
class GajiController extends Controller
{
    public function index() {
        $gaji = DB::table('tb_gaji')->get();
        return view('gaji',['gaji'=>$gaji]);
    }

    public function tambah(){
        return view('gajitambah');
    }

    public function store(request $request)
    {
        DB::table('tb_gaji')->insert([
            'pegawai_id'=>$request->pegawai_id,
            'jumlah_gaji'=>$request->jumlah_gaji,
            'jumlah_lembur'=>$request->jumlah_lembur,
            'potongan'=>$request->potongan,
            'gaji_diterima'=>$request->gaji_diterima,
            'tanggal_gaji'=>$request->tanggal_gaji,
        ]);
        return redirect('/gaji');
    }

    public function edit($id)
    {
        $gaji=DB::table('tb_gaji')->where('gaji_id',$id)->get();

        return view('editgaji',['gaji'=>$gaji]);
    }

    public function storeupdate (request $request)
    {
        DB::table('tb_gaji')->where('gaji_id',$request->id)->update([
            'pegawai_id'=>$request->pegawai_id,
            'jumlah_gaji'=>$request->jumlah_gaji,
            'jumlah_lembur'=>$request->jumlah_gaji,
            'potongan'=>$request->potongan,
            'gaji_diterima'=>$request->gaji_diterima,
            'tanggal_gaji'=>$request->tanggal_gaji,
        ]);
        return redirect('/gaji'); 
    }

    public function hapus($id)
    {
        $gaji=DB::table('tb_gaji')->where('gaji_id',$id)->delete();

        return redirect('/gaji');
    }
}