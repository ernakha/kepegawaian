@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Penugasan</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
        <!-- <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries</div> -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kegiatan</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tempat</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th>Tanggal Terima</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kegiatan</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tempat</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th>Tanggal Terima</th>
                    </tr>
                </tfoot> -->
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Adi Santoso</td>
                        <td>Dinas Luar</td>
                        <td>Individu</td>
                        <td>Sudah</td>
                        <td>Bandung</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Devit Suwardiyanto</td>
                        <td>Kepanitiaan</td>
                        <td>Tim</td>
                        <td>Sudah</td>
                        <td>Bali</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Leonardo D.</td>
                        <td>Dinas Luar</td>
                        <td>Individu</td>
                        <td>Sudah</td>
                        <td>Semarang</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Maher Zein</td>
                        <td>Kepanitiaan</td>
                        <td>Tim</td>
                        <td>Belum</td>
                        <td>Jogja</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Satrio P.</td>
                        <td>Dinas Luar</td>
                        <td>Tim</td>
                        <td>Sudah</td>
                        <td>Jakarta</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Suga</td>
                        <td>Kepanitiaan</td>
                        <td>Individu</td>
                        <td>Sudah</td>
                        <td>Surabaya</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Dian Sastro</td>
                        <td>Dinas Luar</td>
                        <td>Tim</td>
                        <td>Sudah</td>
                        <td>Malang</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Aldi</td>
                        <td>Kepanitiaan</td>
                        <td>Individu</td>
                        <td>Belum</td>
                        <td>Magelang</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Dani</td>
                        <td>Dinas Luar</td>
                        <td>Tim</td>
                        <td>Sudah</td>
                        <td>Sumatera</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Adib</td>
                        <td>Kepanitiaan</td>
                        <td>Individu</td>
                        <td>Sudah</td>
                        <td>Lombok</td>
                        <td>04/12/2023</td>
                        <td>10/12/2023</td>
                        <td>14/12/2023</td>
                    </tr>
                </tbody>
            </table>
            <!-- <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 5 of 10 entries</div> -->
        </div>
    </div>
</div>
   @endsection