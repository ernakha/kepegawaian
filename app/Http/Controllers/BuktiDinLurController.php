<?php

namespace App\Http\Controllers;

use App\Models\Bukdin;
use Illuminate\Http\Request;

class BuktiDinLurController extends Controller
{
    public function index(){
        $data['allDataBukti'] = Bukdin::all();
        return view('backend.bukti dinlur.view_buktidinlur', $data);
     }
  
     public function create(){
        return view('backend.bukti dinlur.add_buktidinlur');
     }
  
     public function store(Request $request){
        $data = new Bukdin();
        $data->kegiatan = $request->kegiatan;
        $data->namafile = $request->namafile;
        $data->keterangan = $request->keterangan;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('dinasluar.view');
     }
  
     public function edit($id){
        return view('backend.bukti dinlur.edit_buktidinlur',);
     }
  
     public function update(Request $request, $id){
        $data = Bukdin::find($id);
        $data->kegiatan = $request->kegiatan;
        $data->namafile = $request->namafile;
        $data->keterangan = $request->keterangan;
        $data->file = $request->file;
        $data->save();
        return redirect()->route('dinasluar.view');
     }
  
     public function delete($id){
        $deleteData = Bukdin::find($id);
        $deleteData->delete();
        return redirect()->route('buktidinlur.view');
     }
}
