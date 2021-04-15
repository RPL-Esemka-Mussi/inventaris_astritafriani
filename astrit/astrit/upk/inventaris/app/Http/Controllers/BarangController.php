<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function tambah()
    {
        return view('addbarang');
    }

    public function insert(Request $res)
    {
        Barang::create([
            "nama_barang" => $res->nama_barang,
            "satuan" => $res->satuan,
            "jumlah" => $res->jumlah,
            "keterangan" => $res->keterangan,
            "lokasi" => $res->lokasi,
        ]);

        return redirect('/barang')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $barang = barang::FindOrFail($id);
        return view('editbarang', compact('barang'));
    }

    public function update(Request $res)
    {

        $barang = barang::FindOrFail($res->id);
        $barang->nama_barang = $res->nama_barang;
        $barang->satuan = $res->satuan;
        $barang->jumlah = $res->jumlah;
        $barang->keterangan = $res->keterangan;
        $barang->lokasi = $res->lokasi;
        $barang->save();
        return redirect('/barang')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        barang::destroy($id);
        return redirect('/barang')->with('delete', 'Data berhasil dihapus');
    }
}
