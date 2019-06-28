@extends('layouts.app')
@section('content')
<br />
<div class="container">
    <img src="/avatar2.png" class="img-circle elevation-2" style="width:150px;
                    margin-left:490px"><br /><br />
    <h4 style="text-align:center">Selamat Datang  {{ Auth::user()->name }} </h4><br />
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

