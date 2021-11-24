<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungans = Tabungan::all();
        return response()->json(['tabungans'=>$tabungans], 200);
    }

    public function show($id)
    {
        $tabungans = Tabungan::find($id);
        if($tabungans)
        {
            return response()->json(['tabungans'=>$tabungans], 200);
        }
        
        else
        {
            return response()->json(['message'=>'DATA TIDAK DITEMUKAN'], 404);
        }
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:191',
            'kelas'=>'required|max:191',
            'jml_tabungan'=>'required|max:191',

        ]);

        $tabungan = new Tabungan;
        $tabungan->nama = $request->nama;
        $tabungan->kelas = $request->kelas;
        $tabungan->jml_tabungan = $request->jml_tabungan;
        $tabungan->save();
        return response()->json(['message'=>'Data Berhasil Ditambahkan'], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|max:191',
            'kelas'=>'required|max:191',
            'jml_tabungan'=>'required|max:191',
        ]);

        $tabungan = Tabungan::find($id);
        if($tabungan)
        {
        $tabungan->nama = $request->nama;
        $tabungan->kelas = $request->kelas;
        $tabungan->jml_tabungan = $request->jml_tabungan;
        $tabungan->update();

        return response()->json(['message'=>'Data Berhasil Diubah'], 200);
        }
        else
        {
        return response()->json(['message'=>'DATA TIDAK DITEMUKAN'], 404);
        }
        
    }

    public function destroy($id)
    {
        $tabungan = Tabungan::find($id);
        if($tabungan)
        {
            $tabungan->delete();
            return response()->json(['message'=>'Data Berhasil Dihapus'], 200);
        }
        else
        {
            return response()->json(['message'=>'DATA TIDAK DITEMUKAN'], 404);
        }
    }
}
