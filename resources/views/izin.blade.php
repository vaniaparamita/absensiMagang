@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ini Halaman Izin</div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <form>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" href="{{ url('/izin')}}">Izin</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary">Cuti</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

