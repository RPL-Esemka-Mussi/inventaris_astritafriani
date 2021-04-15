<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('barang',compact('barang'));
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
            "lokasi" => $res->lokasi
        ]);
    
        return redirect('/barang')->with('success' , 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('editbarang',compact('barang'));
    }

    public function update(Request $res)
    {
        $barang = Barang::findOrFail($res->id);
        
        $barang->name = $res->name;
        $barang->email = $res->email;

        if( ! empty($res->password)) {
            $barang->password = $res->password;
        }
        
        $barang->level = $res->level;
        $barang->alamat = $res->alamat;
        $barang->telepon = $res->telepon;
        $barang->save();

        return redirect('/barang')->with('success' , 'Data Berhasil Diganti:)');

    }

    public function delete($id)
    {
        Barang::destroy($id);

        return redirect('/barang')->with('success' , 'Data Berhasil Dibussek!!:)');
    }
}
