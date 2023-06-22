<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalalumi = Peserta::count();
        $jumlahpesertalaki = Peserta::where('jeniskelamin','Laki-laki')->count();
        $jumlahpesertaperempuan = Peserta::where('jeniskelamin','Perempuan')->count();
        $jumlahpesansaran = Contact::where('pilihan','Saran')->count();
        $jumlahpesankomentar = Contact::where('pilihan','Komentar')->count();
        return view('dashboard.index',compact('totalalumi','jumlahpesertalaki','jumlahpesertaperempuan','jumlahpesansaran','jumlahpesankomentar'));
    }
}
