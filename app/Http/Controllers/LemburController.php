<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;
class LemburController extends Controller
{
    public function index() {
        $lembur = DB::table('tb_lembur')->get();
        return view('lembur',['lembur'=>$lembur]);
    }

    public function tambah(){
        return view('tambahlembur');
    }

    public function store(request $request)
    {
        db::table('tb_lembur')->insert([
            'pegawai_id'=>$request->pegawai_id,
            'bulan_lembur'=>$request->bulan_lembur,
            'jumlah_lembur'=>$request->jumlah_lembur,
        ]);
        return redirect('/lembur');
    }

    public function edit($id)
    {
        $lembur=db::table('tb_lembur')->where('lembur_id',$id)->get();

        return view('editlembur',['lembur'=>$lembur]);
    }

    public function storeupdate (request $request)
    {
        DB::table('tb_lembur')->where('lembur_id',$request->id)->update([
            'pegawai_id'=>$request->pegawai_id,
            'bulan_lembur'=>$request->bulan_lembur,
            'jumlah_lembur'=>$request->jumlah_lembur,
        ]);
        return redirect('/lembur'); 
    }

    public function hapus($id)
    {
        $lembur=DB::table('tb_lembur')->where('lembur_id',$id)->delete();

        return redirect('/lembur');
    }
}