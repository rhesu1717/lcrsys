@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Death</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Death</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="card shadow-lg">
        <div class="card-header">
            <form action="" method="GET">
                @csrf
                <p>
                    <a class="btn btn-success btn-lg" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="fas fa-search"></span>
                    </a>
                </p>
                <div class="collapse {{(request()->has(['lastname','firstname','middlename','lcr_no','datex','dreg'])? 'show':'')}}" id="collapseExample">
                {{-- <div class="collapse" id="collapseExample"> --}}
                    <div class="card card-body">
                        <form action="{{route('birth.index')}}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="lcr_no">LCR No.</label>
                                        <input type="text" class="form-control" value="{{request()->lcr_no}}" name="lcr_no" id="lcr_no" placeholder="LCR No.">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="datex">DateX mm/dd/yyyy</label>
                                        <input type="text" class="form-control" value="{{request()->datex}}" name="datex" id="datex" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="dreg">DREG mm/dd/yyyy</label>
                                        <input type="text" class="form-control" value="{{request()->dreg}}" name="dreg" id="dreg" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="lastname">Last Name</label>
                                        <input type="text" class="form-control" value="{{request()->lastname}}" name="lastname" id="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="firstname">First Name</label>
                                        <input type="text" class="form-control" value="{{request()->firstname}}" name="firstname" id="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="middlename">Middle Name</label>
                                        <input type="text" class="form-control" value="{{request()->middlename}}" name="middlename" id="middlename" placeholder="Middle Name">
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-info">Search</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr align="center">
                        <th>LCR</th>
                        <th>NAME</th>
                        <th>DATEX</th>
                        <th>DREG</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deaths as $death)
                        <tr align="center">
                            <td class="align-middle">{{$death->LCR_NO}}</td>
                            <td class="align-middle">{{$death->full_name}}</td>
                            <td class="align-middle">{{$death->DATEX}}</td>
                            <td class="align-middle">{{$death->DREG}}</td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
            <div class="mt-3">
                {{$deaths->links()}}
            </div>
        </div>
    </div>
@endsection
