@extends('layouts.app')
<style>
    @media (max-width:1199.98px){
        .table-responsive-xl{
            display:block;
            width:100%;
            overflow-x:auto;
            -webkit-overflow-scrolling:touch;
        }
        .table-responsive-xl>.table-bordered{
            border:0}
        }
        .button {
            float: right;
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 6px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
</style>

@section('content')
 <div class="container">
  <div class="row">
      <br />
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
            <div class="box-header">
                <br />
              <h2 class="box-title">Riwayat Pengajuan Cuti</h2>
              <button class="button">IZIN</button>
              <button class="button">CUTI</button>
            </div>
            </div>
            <br />
            <table class="table table-bordered table-responsive-xl">
              <thead>
              <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Surat Cuti</th>
                <th>Proses</th>
              </tr>
              </thead>
            </table>
            <br />
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- AdminLTE App -->
@endsection
