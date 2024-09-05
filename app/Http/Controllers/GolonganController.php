<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;

class GolonganController extends Controller
{
    public function index() {
        $golongan = DB::table('tb_golongan')->get();
        return view('golongan',['golongan'=>$golongan]);
    }

    public function tambah(){
        return view('tambahgolongan');
    }

    public function store(request $request)
    {
        db::table('tb_golongan')->insert([
            'golongan_nama'=>$request->golongan_nama,
            'gaji_pokok'=>$request->gaji_pokok,
            'tunjangan_keluarga'=>$request->tunjangan_keluarga,
            'tunjangan_transport'=>$request->tunjangan_transport,
            'tunjangan_makan'=>$request->tunjangan_makan,
        ]);
        return redirect('/golongan');
    }

    public function edit($id)
    {
        $golongan=DB::table('tb_golongan')->where('golongan_id',$id)->get();

        return view('editgolongan',['golongan'=>$golongan]);
    }

    public function storeupdate (request $request)
    {
        DB::table('tb_golongan')->where('golongan_id',$request->id)->update([
            'golongan_nama'=>$request->golongan_nama,
            'gaji_pokok'=>$request->gaji_pokok,
            'tunjangan_keluarga'=>$request->tunjangan_keluarga,
            'tunjangan_transport'=>$request->tunjangan_transport,
            'tunjangan_makan'=>$request->tunjangan_makan,
        ]);
        return redirect('/golongan'); 
    }

    public function hapus($id)
    {
        $golongan=DB::table('tb_golongan')->where('golongan_id',$id)->delete();

        return redirect('/golongan');
    }
}