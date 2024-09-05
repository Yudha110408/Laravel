<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;

class PegawaiController extends Controller
{
    public function index() {
        $pegawai = DB::table('tb_pegawai')->get();
        return view('pegawai',['pegawai'=>$pegawai]);
    }

    public function tambah(){
        return view('tambahpegawai');
    }

    public function store(request $request)
    {
         DB::table('tb_pegawai')->insert([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai=DB::table('tb_pegawai')->where('pegawai_id',$id)->get();

        return view('editpegawai',['pegawai'=>$pegawai]);
    }

    public function storeupdate (request $request)
    {
        DB::table('tb_pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat,
        ]);
        return redirect('/pegawai'); 
    }

    public function hapus($id)
    {
        $pegawai=DB::table('tb_pegawai')->where('pegawai_id',$id)->delete();

        return redirect('/pegawai');
    }
}



