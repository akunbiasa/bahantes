<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Http\Request;
use PDF;
// use Barryvdh\DomPDF\Facade as PDF;

class ListController extends Controller
{
    public function index()
    {
        $data = Peserta::paginate(5);
        return view('list.index',compact('data'));
    }

    public function tampilkandata($id)
    {
        $data = Peserta::find($id);
        //dd($data);

        return view('tambahpeserta.tampiledit', compact('data'));
    }

    public function editdata(Request $request, $id)
    {
        $data = Peserta::find($id);
        $data->update($request->all());
        return redirect()->route('list')->with('success','Data Berhasil Di Edit !');

    }

    public function hapusdata($id)
    {
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('list')->with('success','Data Berhasil Di Hapus !');

    }

    public function exportpdf()
    {
        $data = Peserta::all();

        view()->share('data' , $data);
        $pdf = PDF::loadview('pdf.index');
        return $pdf->download('list.pdf');
    }
}
