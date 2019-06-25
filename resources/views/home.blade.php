@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Silahkan Pilih Salah Satu</div>
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

