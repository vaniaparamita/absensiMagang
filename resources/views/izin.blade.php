<!DOCTYPE html>

<html>

<head>

  <title>Laravel Bootstrap Datepicker</title>

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
                <div class="panel-heading">Detail Izin </div>
                <div class="panel-body">Nama
                    <div>
                        <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
                <div class="panel-body">Tanggal Mulai Izin
                <div>
                <input id="start_date"  class="date form-control" name="date">
                        </div>
                                <script type="text/javascript">

                                    $('.date').datepicker({  

                                    format: 'mm-dd-yyyy'

                                    });  

                                </script>  
                        </div>
                        <div class="panel-body">Tanggal Selesai Izin
                <div>
                <input id="end_date"  class="date form-control" name="date">
                        </div>
                                <script type="text/javascript">

                                    $('.date').datepicker({  

                                    format: 'mm-dd-yyyy'

                                    });  

                                </script>  
                        </div>
                <div class="panel-body">Keterangan
                <div>
                        <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
                <div class="panel-body">Surat Keterangan</div>
                <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group">
                   
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>

@endsection

