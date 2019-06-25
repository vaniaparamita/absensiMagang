@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ini Halaman Izin</div>
                <div class="panel-body">
                    <table class="table table-responsive">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <form action="/home" method="get">
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary">Back</button>
                                </td>
                                </form>
                                <form action="/izin" method="get">   
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary">Done</button>
                                </td>
                                </form>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

