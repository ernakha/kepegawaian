@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Dinas Luar</h1>
            </div>
            <div class="co text-end mb-2">
                <a href="{{route('dinasluar.add')}}"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori Tugas</th>
                            <th>Keterangan</th>
                            <th>Tempat Dinas</th>
                            <th>Tanggal Terima</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allDataDinasLuar as $item =>$dinas_luars)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$dinas_luars->kategori}}</td>
                            <td>{{$dinas_luars->keterangan}}</td>
                            <td>{{$dinas_luars->tempat_dinas}}</td>
                            <td>{{$dinas_luars->terima}}</td>
                            <td>{{$dinas_luars->mulai}}</td>
                            <td>{{$dinas_luars->selesai}}</td>
                            <td>
                                <a href="{{route('buktidinlur.add')}}"><i class="fa fa-upload" aria-hidden="true" ></i></a>
                                <a href="{{route('dinasluar.delete',$dinas_luars->id )}}" id="delete"  i class="fa fa-trash" aria-hidden="true"></i>
                                <!-- <a href="{{url('download-dinas_luar-pdf')}}"><button type="button" class="btn btn-warning">Download</button></a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection