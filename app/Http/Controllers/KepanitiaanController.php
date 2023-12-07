<?php

namespace App\Http\Controllers;

use App\Models\Kepanitiaan;
use App\Models\Anggota;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KepanitiaanController extends Controller
{
    public function index(){
        $data['allDataKepanitiaan'] = Kepanitiaan::all();
        return view('backend.kepanitiaan.view_kepanitiaan', $data);
     }
  
     public function create(){
        return view('backend.kepanitiaan.add_kepanitiaan');
     }
  
     public function store(Request $request){
        $data = new Kepanitiaan();
        $data->kategori = $request->kategori;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->save();

        foreach ($request->nama  as $key => $namas) {
         $dataNama = new Anggota;
         $dataNama -> nama= $namas;
         $dataNama -> kepanitiaans_id = $data->id;
         $dataNama->save();
        }
        return redirect()->route('kepanitiaan.view');
     }
  
     public function edit($id){
        $editKepanitiaan = Kepanitiaan::find($id);
        return view('backend.kepanitiaan.edit_kepanitiaan', compact('editkepanitiaan'));
     }
  
     public function update(Request $request, $id){
         $data = Kepanitiaan::find($id);
      //   $data->namaAnggota = $request->anggota_id;
      //   $data->kategoriTugas = $request->kategori;
      //   $data->terima = $request->terima;
      //   $data->mulai = $request->mulai;
      //   $data->selesai = $request->selesai;
      //   $data->save();
      $data->kategori = $request->kategori;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->save();

        foreach ($request->nama  as $key => $namas) {
         $dataNama = new Anggota;
         $dataNama -> nama= $namas;
         $dataNama -> kepanitiaans_id = $data->id;
         $dataNama->save();
        }
        return redirect()->route('kepanitiaan.view');
     }
  
     public function delete($id){
        $deleteData = Kepanitiaan::find($id);
        $deleteData->delete();
        return redirect()->route('kepanitiaan.view');
     }
}
