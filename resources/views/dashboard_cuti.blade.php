@extends('layouts.app')
<style>
        @media (max-width:991.98px){
          .table-responsive-lg{
            display:block;
            width:100%;
            overflow-x:auto;
            -webkit-overflow-scrolling:touch
          }}
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
        .button2 {
            float: right;
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
      <div class="col-sm-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-title text-center" style="background:#e0e0e0">
                <b class="box-title">TOTAL CUTI</b>
              </div>
              <div class="panel-body text-center">
                Waktu Cuti Yang Sudah Diajukan : <b>{{ DB::table('model_cutis')->where('status', 'disetujui')->sum('total')}}</b> 
                Dari 12 Hari
              </div>
            </div>
          </div>
      </div>    
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="container-fluid">
          <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
            <div class="box-header">
              <h2 class="box-title">Riwayat Pengajuan Cuti</h2>
               <br /> 
                <form action="/dashboard_izin">
                    <button class="button">IZIN</button>
                <form action="#">
                    <button class="button2" disabled="disabled">CUTI</button>
                </form>
            </div>

            <br /><br />
            <table class="table table-bordered table-responsive-lg" id="table_cutis">
              <thead>
              <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Surat Cuti</th>
              </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td style="text-transform: capitalize">{{ $d->nama }}</td>
                      <td id="tgl1">{{ $d->tanggal_mulai }}</td>
                      <td id="tgl2">{{ $d->tanggal_selesai }}</td>
                      <td>{{ $d->keterangan }}</td>
                      <td>{{ $d->status }}</td>
                      <td>
                        <a href="{{ asset($d->file) }}" target="_blank">
                          <img width="150px" src="{{ asset($d->file) }}">
                        </a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br />
            </div><!-- /.col -->
            </div><!-- /.row -->
      </div><!-- /.container-fluid -->
          
    <!-- AdminLTE App -->
@endsection
@section('sweet')
<script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> 
    <script>
      $(document).ready( function () {
      $('#table_cutis').DataTable();
      });
    </script>

@endsection
