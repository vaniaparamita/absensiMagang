@extends('layouts.app')
<<<<<<< HEAD
=======
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweet::alert')
</head>

>>>>>>> master
@section('content')
<br />
<div class="container">
    <div style="display:block; margin-left:auto; margin-right: auto;">
        <img src="/user.jpg" class="img-circle elevation-2" style="width:150px; border:2px solid; display: block;
                    margin-left: auto; margin-right: auto;">
        <br />
        <h4 style="text-align:center; text-transform: capitalize">Selamat Datang "{{ Auth::user()->name }}"</h4><br />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading" style="text-align:center">Silahkan Pilih Salah Satu</div>
                        <div class="panel-body">
                            <table class="table table-responsive">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                      <form action="/izin" method="get">
                                        <td>
                                         <button type="submit" class="btn btn-flat btn-primary">Izin</button>
                                        </td>
                                      </form>
                                        <form action="/cuti" method="get">   
                                          <td>
                                            <button type="submit" class="btn btn-flat btn-primary">Cuti</button>
                                          </td>
                                        </form>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    

@endsection

