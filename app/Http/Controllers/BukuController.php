<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index() {
        $buku = DB::table('tb_buku')->get();
        return view('buku', ['buku' => $buku]);
    }

    public function tambah() {
        return view('tambahbuku');
    }

    public function store(Request $request) {
        DB::table('tb_buku')->insert([
            'buku_judul' => $request->judul,
            'buku_penulis' => $request->penulis,
            'buku_tahun_terbit' => $request->tahun_terbit,
            'buku_penerbit' => $request->penerbit,
        ]);

        return redirect('buku');
    }

    public function edit($id) {
        $buku = DB::table('tb_buku')->where('buku_id', $id)->first();

        return view('editbuku', ['buku' => $buku]);
    }

    public function update(Request $request) {
        DB::table('tb_buku')->where('buku_id', $request->id)->update([
            'buku_judul' => $request->judul,
            'buku_penulis' => $request->penulis,
            'buku_tahun_terbit' => $request->tahun_terbit,
            'buku_penerbit' => $request->penerbit,
        ]);

        return redirect('/buku');
    }

    public function hapus($id) {
        DB::table('tb_buku')->where('buku_id', $id)->delete();

        return redirect('/buku');
    }
}
