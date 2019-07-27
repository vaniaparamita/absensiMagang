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
            <!-- @foreach($data as $d) -->
            <form action="#" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="#" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_mulai">Tanggal Mulai :</label>
						<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="#" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_selesai">Tanggal Selesai :</label>
						<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="#" disabled> 
					</div>

					<div class="form-group">
						<label for="keterangan">Keterangan :</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" value="#" disabled>
					</div>

					<div class="form-group">
						<label for="tanggung_jawab">Tanggung Jawab :</label>
						<input type="text" class="form-control" id="tanggung_jawab" name="tanggung_jawab" value="#" disabled>
					</div>

					<div class="form-group">
					 	<label for="telepon">Telepon :</label>
					 	<input type="text" class="form-control" id="telepon" name="telepon" value="#" disabled>
				    </div>

					<div class="form-group">
					  	<label for="surat_cuti">Surat Cuti :</label>
						  {{-- <input type="text" class="form-control" id="surat_cuti" name="surat_cuti" href="#" target="_blank"  img width="150px" src="{{ asset($d->file) }} " disabled> --}}
						  <div > <a href="#" target="_blank">
							<img width="150px" src="#">
						  </a>

						</div>

					</div>

				    <div class="form-group">
					<label for="status">Pilih Aksi :</label>
					<select  class="form-control" name="status">
						<option value="Disetujui Departemen">Diterima</option>
						<option value="Ditolak Departemen">Ditolak</option>
					</select>  	
					</div>

					<div class="form-group">
					  	<label for="alasan">Alasan :</label>
					  	<textarea class="form-control" id="alasan" name="alasan" placeholder="Isi Apabila Cuti Ditolak"></textarea>
					</div>				 
					
					<div class="form-group">
					  <button type="submit" class="btn btn-md btn-primary" style="background-color:#1675d1">Simpan</button>
					  <a class="btn btn-danger" href="#" role="button">Batalkan</a>
					</div>
				</form>
			<!--@endforeach -->
            <br />
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection


