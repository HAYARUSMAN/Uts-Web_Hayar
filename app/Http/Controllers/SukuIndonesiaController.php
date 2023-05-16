<?php

namespace App\Http\Controllers;

use App\Models\SukuIndonesia;
use Illuminate\Http\Request;
use App\Http\Requests\SukuIndonesiaRequest;

class SukuIndonesiaController extends Controller
{
    public function index(){
        $SukuIndonesia = SukuIndonesia::get();
        return view ('index', compact('SukuIndonesia') );
        }

        public function tambah(){
        return view ('tambah');
      }

      public function edit($id){
        $SukuIndonesia = SukuIndonesia::where('id', $id)->first();
        return view ('edit',compact('SukuIndonesia'));
      }

      public function lihat($id){
        $SukuIndonesia = SukuIndonesia::where('id', $id)->first();
        return view ('lihat',compact('SukuIndonesia'));
      }


    public function store(SukuIndonesiaRequest $request)
    {
        $SukuIndonesia = new SukuIndonesia ();

        $SukuIndonesia->nama_suku     = $request->nama_suku;
        $SukuIndonesia->penjelasan    = $request->penjelasan;

        $SukuIndonesia->save();

        return redirect('/');
    } 
    
    public function update(SukuIndonesiaRequest $request,$id)
    {
        $SukuIndonesia = SukuIndonesia::where('id', $id)->first();
        $SukuIndonesia->nama_suku    = $request->nama_suku;
        $SukuIndonesia->penjelasan   =  $request->penjelasan;
    
        $SukuIndonesia->update();

        return redirect('/');
    }   

    public function hapus($id)
    {
        $SukuIndonesia = SukuIndonesia::where('id', $id)->first();

        $SukuIndonesia->delete();

        return redirect('/');
    }  

}
