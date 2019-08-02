@extends('AdminDepartemen/base2')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
            <div class="box-header">
            <div class="box box-primary">
          <div class="content-header">
					<div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Riwayat Pengajuan Izin<p>
					  </div>	
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right" style="font-size:14px">
                  <li class="breadcrumb-item">
									  <a href="/cutihistoryD">Cuti</a>
								  </li>
                  <li class="breadcrumb-item active">
								    Izin
								  </li>
							</ol>
						</div>
					</div>
				 </div>
            <table class="table table-bordered table-responsive-xl" id="table_cuti">
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
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> 
    <script>
      $(document).ready( function () {
      $('#table_cuti').DataTable();
      });
    </script>
    <!-- /.content-header -->
@endsection
