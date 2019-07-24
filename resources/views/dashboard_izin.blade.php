@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        .table-responsive-xl{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        .table-responsive-xl>.table-bordered{
            border:0}

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
              <h2 class="box-title">Riwayat Pengajuan Izin</h2>
                    <button class="button">IZIN</button>
                <form action="/dashboard_cuti">
                    <button class="button">CUTI</button>
                </form>
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
                <th>Surat Izin</th>
              </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td style="text-transform: capitalize">{{ $d->nama }}</td>
                      <td>{{ $d->tanggal_mulai }}</td>
                      <td>{{ $d->tanggal_selesai }}</td>
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
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- AdminLTE App -->
@endsection
