<!DOCTYPE html>

<html>

<head>


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Cuti </div>
                    <form action="{{ route('cuti.store') }}" method="post" enctype="multipart/form-data" id="tambah_cutis">
                        {{ csrf_field() }}
                          <div class="panel-body">Nama
                        <div>
                              <input id="nama" type="text" class="form-control" name="nama"  required autofocus
                                 value="{{ Auth::user()->name }}" style="text-transform: capitalize"
                                  >
                        </div>
                </div>
                    <div class="panel-body">NIK
                        <div>
                            <input id="id_user" type="text" class="form-control" name="id_user"
                            required autofocus
                            value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                        </div>
                    </div>
                <div class="panel-body">Tanggal Mulai Cuti
            <div>
                    <input id="tanggal_mulai"  class="date form-control" name="tanggal_mulai" autocomplete="off">
                        </div>
                            <script type="text/javascript">
                                $('.date').datepicker({  
                                    format: 'dd-mm-yyyy'
                                    });  
                                </script>  
                            </div>
                <div class="panel-body">Tanggal Selesai Cuti
            <div>
                    <input id="tanggal_selesai"  class="date form-control" name="tanggal_selesai" autocomplete="off">
                        </div>
                            <script type="text/javascript">
                                $('.date').datepicker({  
                                    format: 'dd-mm-yyyy'
                                    });  
                                </script>  
                            </div>
                <div class="panel-body">Keterangan
            <div>
                    <input id="keterangan" type="text" class="form-control" name="keterangan" autocomplete="off" required autofocus>
                        </div>
                            </div>
                            <div class="panel-body">Tanggung Jawab
                                <div>
                                        <input id="tanggung_jawab" type="text" class="form-control" name="tanggung_jawab" autocomplete="off" required autofocus>
                                            </div>
                                        </div>
                      <div class="panel-body">Nomor Telepon Darurat
                      <div>
                      <input id="telepon" type="text" class="form-control" name="telepon" autocomplete="off" required autofocus>
                      </div>   
                    </div>
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                        <strong>Info!</strong> Maximum Size Upload : 2MB
                                    </div>
                                        Surat Keterangan
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                                   
                <div class="panel-body">
                    <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            <a class="btn btn-danger" href="{{route('home.index')}}" role="button">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
