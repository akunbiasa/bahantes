<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Auth\Events\Validated;

use Illuminate\Http\Request;

class TambahpesertaController extends Controller
{
    public function index()
    {
        return view('tambahpeserta.index');
    }

    public function store(Request $request)
   {

        $validate = Peserta::create([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'nohp' => $request->nohp,
            'jeniskelamin' => $request->jeniskelamin

        ]);

        return redirect()->route('list')->with('success','Daftar Berhasil !');
   }
}
