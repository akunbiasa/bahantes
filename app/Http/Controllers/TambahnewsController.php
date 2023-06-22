<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TambahnewsController extends Controller
{
    public function index(){
        return view('tambahnews.index');
    }

    public function store(Request $request)
   {

      $data = News::create($request->all());
      if($request->hasfile('image')){ 
      
      $request->file('image')->move('imagenews/',$request->file('image')->getClientOriginalName());
      $data->image = $request->file('image')->getClientOriginalName();
      $data->save();
      }

        return redirect()->route('dashboard')->with('success','News Berhasil dikirim!');
   }
}
