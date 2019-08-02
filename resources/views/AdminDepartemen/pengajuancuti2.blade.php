@extends('AdminDepartemen/base2')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style="background:white">
        <div class="col-md-8 col-md-offset-6">
		<div class="box box-primary">
            	<div class="content-header">
					<div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Pengajuan Cuti<p>
					  </div>	
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right" style="font-size:14px">
								<li class="breadcrumb-item active">
								Cuti
								</li>
								<li class="breadcrumb-item">
									<a href="/pengajuanizin2">Izin</a>
								</li>
							</ol>
						</div>
					</div>
				 </div>
            </div>
			<hr>
			<form action="{{ route('cuti3.store') }}"  method="post" enctype="multipart/form-data" id="tambah_cutids">
			{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input id="nama" type="text" class="form-control" name="nama"  required autofocus
						value="{{ Auth::user()->name }}" style="text-transform: capitalize"
						 >					</div>

                    <div class="form-group">
						<label for="nama">NIK :</label>
						 <input id="id_user" type="text" class="form-control" name="id_user"
                            required autofocus
                            value="{{ Auth::user()->id }}" style="text-transform: capitalize">
					</div>

					<div class="form-group">
						<label for="nama">Tanggal Mulai Cuti :</label>
						<input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
					</div>

					<div class="form-group">
						<label for="nama">Tanggal Selesai Cuti :</label>
						<input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
					</div>

					<div class="form-group">
					 <label for="nama">Keterangan :</label>
					 <input type="text" class="form-control" id="keterangan" name="keterangan">
				    </div>

				    <div class="form-group">
					  <label for="nama">Tanggung Jawab :</label>
					  <input type="text" class="form-control" id="tanggung_jawab" name="tanggung_jawab">
				    </div>

					<div class="form-group">
						<label for="id_departemen">Nomor Telepon Darurat :</label>
						<input type="text" class="form-control" id="telepon" name="telepon">
					  </div>
					  
				    <div class="form-group">
					  <label for="nama">Surat Keterangan :</label>
					  <input type="file" class="form-control" id="file" name="file">
					</div>
				   
					<div class="form-group">
					  <button type="submit" class="btn btn-md btn-primary">Simpan</button>
					  <button type="reset" class="btn btn-md btn-danger">Batalkan</button>
					</div>
				</form>
			
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('sweet')
<script>
      var isiPesan = '{{Session::get('cuti_success') }}';
      var exist = '{{Session::has('cuti_successss') }}';
      if(exist){
        Swal.fire(
          'Selamat!',
          isiPesan,
          'success'
        )
      }
</script>
@endsection