<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.index');
    }
}
