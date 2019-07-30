@extends('Admin/base')
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
              <div class="card-title" style="font-size:18px;color:white">Detail Karyawan</div>
             </div>
            </div>
            <br />
            @foreach($data as $d)
            <form action="{{ route('karyawan.show', $d->nik) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
					<div class="form-group">
							<label for="nama">Foto :</label>
						<div> <a href="{{ asset($d->file) }}" target="_blank">
						<img width="150px" src="{{ asset($d->file) }}">
						</a>
					</div>

					<div class="form-group">
						<label for="nama">NIK :</label>
						<input type="text" class="form-control" id="nik" name="nik" value="{{ $d->nik }}" disabled>
					</div>

					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="{{ $d->nama }}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_mulai">Jenis Kelamin :</label>
						<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $d->jenis_kelamin }}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_selesai">Tempat Lahir :</label>
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $d->tempat_lahir }}" disabled> 
					</div>

					<div class="form-group">
						<label for="keterangan">Tanggal Lahir :</label>
						<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $d->tanggal_lahir}}" disabled>
					</div>

					<div class="form-group">
						<label for="keterangan">Telepon :</label>
						<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $d->tanggal_lahir}}" disabled>
					</div>

					<div class="form-group">
						<label for="keterangan">Jabatan :</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $d->jabatan}}" disabled>
					</div>

					<div class="form-group">
						<label for="keterangan">Departemen :</label>
						<input type="text" class="form-control" id="department" name="department" value="{{ $d->department}}" disabled>
					</div>

					<div class="form-group">
						<label for="keterangan">ID Departemen :</label>
						<input type="text" class="form-control" id="id_departemen" name="id_departemen" value="{{ $d->id_departemen}}" disabled>
					</div>

					<div class="form-group">
						<label for="keterangan">Status :</label>
						<input type="text" class="form-control" id="status" name="status" value="{{ $d->status}}" disabled>
					</div>

					<td>
						<a href="{{route('karyawan.edit',$d->nik)}}" class="btn btn-sm btn-primary">Edit</a>       
					</td> 
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


