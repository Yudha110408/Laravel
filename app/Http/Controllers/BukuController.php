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

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit($id) {
        $buku = DB::table('tb_buku')->where('buku_id', $id)->first();

        if (!$buku) {
            return redirect()->route('buku.index')->with('error', 'Buku tidak ditemukan');
        }

        return view('editbuku', ['buku' => $buku]);
    }

    public function update(Request $request, $id) {
        $affected = DB::table('tb_buku')->where('buku_id', $id)->update([
            'buku_judul' => $request->judul,
            'buku_penulis' => $request->penulis,
            'buku_tahun_terbit' => $request->tahun_terbit,
            'buku_penerbit' => $request->penerbit,
        ]);

        if ($affected) {
            return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
        } else {
            return redirect()->route('buku.index')->with('error', 'Gagal memperbarui buku');
        }
    }

    public function destroy($id) {
        $deleted = DB::table('tb_buku')->where('buku_id', $id)->delete();

        if ($deleted) {
            return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
        } else {
            return redirect()->route('buku.index')->with('error', 'Gagal menghapus buku');
        }
    }
}
