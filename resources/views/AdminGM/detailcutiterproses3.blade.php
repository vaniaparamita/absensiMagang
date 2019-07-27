@extends('AdminGM/base3')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
            <div class="content-header" style="background:#1675d1">
              <div class="card-title" style="font-size:18px;color:white">Detail Pengajuan Cuti</div>
      
             </div>
            </div>
            <br />
            @foreach($data as $d)
            <form action="{{ route('detailcuti.show', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="{{ $d->nama }}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_mulai">Tanggal Mulai :</label>
						<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $d->tanggal_mulai }}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_selesai">Tanggal Selesai :</label>
						<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $d->tanggal_selesai }}" disabled> 
					</div>

					<div class="form-group">
						<label for="keterangan">Keterangan :</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $d->keterangan}}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggung_jawab">Tanggung Jawab :</label>
						<input type="text" class="form-control" id="tanggung_jawab" name="tanggung_jawab" value="{{ $d->tanggung_jawab }}" disabled>
					</div>

					<div class="form-group">
					 	<label for="telepon">Telepon :</label>
					 	<input type="text" class="form-control" id="telepon" name="telepon" value="{{ $d->telepon}} " disabled>
					</div>
					
					<div class="form-group">
						<label for="telepon">Status :</label>
						<input type="text" class="form-control" id="status" name="status" value="{{ $d->status}} " disabled>
				   </div>

					<div class="form-group">
					  	<label for="surat_cuti">Surat Cuti :</label>
						  {{-- <input type="text" class="form-control" id="surat_cuti" name="surat_cuti" href="{{ asset($d->file) }}" target="_blank"  img width="150px" src="{{ asset($d->file) }} " disabled> --}}
						  <div > <a href="{{ asset($d->file) }}" target="_blank">
							<img width="150px" src="{{ asset($d->file) }}">
						  </a>

						</div>

					</div>

				   
				</form>
				@endforeach
            <br />
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection


