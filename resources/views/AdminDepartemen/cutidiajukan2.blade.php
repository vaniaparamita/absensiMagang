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
              <i class="ion ion-clipboard"></i>
                <br />
              <h2 class="box-title">Daftar Pengajuan Cuti</h2>
      
             </div>
            </div>
            <br />
            <table class="table table-bordered table-responsive-xl" id="table_cuti">
              <thead>
              <tr class="table-secondary" style="text-align:center; text-transform:uppercase">
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
               {{--  <th>Keterangan</th>
                <th>Tanggung Jawab</th>
                <th>No Telepon Darurat</th> --}}
                <th>Status</th>
                {{-- <th>Surat Cuti</th> --}}
                <th>Detail</th>
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
                     {{--  <td>{{ $d->keterangan }}</td>
                      <td>{{ $d->tanggung_jawab }}</td>
                      <td>{{ $d->telepon }}</td> --}}
                      <td>{{ $d->status }}</td>
                      {{-- <td>
                        <a href="{{ asset($d->file) }}" target="_blank">
                          <img width="150px" src="{{ asset($d->file) }}">
                        </a>
                      </td> --}}
            {{-- <form action="{{ route('cuti2.update', $d->id) }}" method="post" enctype="multipart/form-data">
		      	  {{ csrf_field() }}
			        {{ method_field('PUT') }}
                      <td>
                      <button name="status" value="Disetujui Departemen" class=" btn btn-sm btn-primary">Disetujui</button>
                      <button name="status" value="Ditolak Departemen" class=" btn btn-sm btn-danger">Tidak</button>
                      </td>
                      </form> --}}
                      <td>
                      <a class="btn btn-primary" href="{{route('detailcuti.edit', $d->id)}}" role="button">Detail</a>
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
    <!-- /.content-header -->
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

@endsection
