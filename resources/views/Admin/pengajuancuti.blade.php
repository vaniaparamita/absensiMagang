@extends('Admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style="background:white">
        <div class="col-md-8 col-md-offset-6">
			<br />
			<form action="/pengajuanizin">
                    <button class="btn btn-md btn-primary" style="float:right">IZIN</button>
                </form>
			<form action="#">
                    <button class="btn btn-md btn-secondary" style="float:right" disabled>CUTI</button>
                </form>    
            <h1 class="m-0 text-dark">Pengajuan Cuti</h1>
            <hr>
			<form action="{{ route('cutiHRD.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input id="nama" type="text" class="form-control" name="nama"  required autofocus
						value="{{ Auth::user()->name }}" style="text-transform: capitalize">
					</div>
					
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
      var isiPesan = '{{Session::get('cuti_hrd') }}';
      var exist = '{{Session::has('cuti_hrd') }}';
      if(exist){
        Swal.fire(
          'Selamat!',
          isiPesan,
          'success'
        )
      }
</script>
@endsection