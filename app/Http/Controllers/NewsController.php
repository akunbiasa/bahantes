<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function tampilkannews($id)
    {
        $data = News::find($id);
        //dd($data);

        return view('news.index', compact('data'));
    }
}
