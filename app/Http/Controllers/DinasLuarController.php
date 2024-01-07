<?php

namespace App\Http\Controllers;

use App\Models\Dinas_luar;
use App\Models\Anggotaa;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class DinasLuarController extends Controller
{
    public function index(){
        $data['allDataDinasLuar'] = Dinas_luar::all();
        return view('backend.dinasluar.view_dinasluar', $data);
     }
  
     public function create(){
        return view('backend.dinasluar.add_dinasluar');
     }
  
     public function store(Request $request){
        $data = new Dinas_luar();
        $data->kategori = $request->kategori;
        $data->keterangan = $request->keterangan;
        $data->tempat_dinas = $request->tempat_dinas;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->save();

        foreach ($request->nama  as $key => $namas) {
         $dataNama = new Anggotaa;
         $dataNama -> nama= $namas;
         $dataNama -> dinas_luars_id = $data->id;
         $dataNama->save();
        }
        return redirect()->route('dinasluar.view');
     }
  
     public function edit($id){
        $edit = Dinas_luar::find($id);
        return view('backend.dinasluar.edit_dinasluar', compact('edit'));
     }
  
     public function update(Request $request, $id){
         $data = Dinas_luar::find($id);
      //   $data->namaAnggota = $request->anggotaa_id;
      //   $data->kategori = $request->kategori;
        // $data->keterangan = $request->keterangan;
        // $data->tempat_dinas = $request->tempat_dinas;
      //   $data->terima = $request->terima;
      //   $data->mulai = $request->mulai;
      //   $data->selesai = $request->selesai;
      //   $data->save();
      $data->kategori = $request->kategori;
      $data->keterangan = $request->keterangan;
        $data->tempat_dinas = $request->tempat_dinas;
        $data->terima = $request->terima;
        $data->mulai = $request->mulai;
        $data->selesai = $request->selesai;
        $data->save();

        foreach ($request->nama  as $key => $namas) {
         $dataNama = new Anggotaa;
         $dataNama -> nama= $namas;
         $dataNama -> dinasluar_id = $data->id;
         $dataNama->save();
        }
        return redirect()->route('dinasluar.view');
     }
  
   //   public function delete($id){
   //      $deleteData = Dinas_luar::find($id);
   //      $deleteData->delete();
   //      return redirect()->route('dinasluar.view');
   //   }
     public function delete($id){
      // dd('berhasil masuk controller user edit');
      $deleteData= Dinas_luar::find($id);
      $deleteData->delete();

      return redirect()->route('dinasluar.view')->with('info','Delete user berhasil');
  }
}
