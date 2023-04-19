@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Marriage</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Marriage</li>
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
                <div class="collapse {{(request()->has(['w_lastname','w_firstname','w_middlename','g_lastname','g_firstname','g_middlename','lcr_no','date','dreg'])? 'show':'')}}" id="collapseExample">
                {{-- <div class="collapse" id="collapseExample"> --}}
                    <div class="card card-body">
                        <form action="{{route('marriage.index')}}" method="GET">
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
                                        <label class="input-group-text bg-primary" for="datex">Date mm/dd/yyyy</label>
                                        <input type="text" class="form-control" value="{{request()->date}}" name="date" id="date" placeholder="mm/dd/yyyy">
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
                                        <label class="input-group-text bg-success" for="g_lastname">G Last Name</label>
                                        <input type="text" class="form-control" value="{{request()->g_lastname}}" name="g_lastname" id="g_lastname" placeholder="G Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-success" for="g_firstname">G First Name</label>
                                        <input type="text" class="form-control" value="{{request()->g_firstname}}" name="g_firstname" id="g_firstname" placeholder="G First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-success" for="g_middlename">G Middle Name</label>
                                        <input type="text" class="form-control" value="{{request()->g_middlename}}" name="g_middlename" id="g_middlename" placeholder="G Middle Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-warning" for="w_lastname">W Last Name</label>
                                        <input type="text" class="form-control" value="{{request()->w_lastname}}" name="w_lastname" id="w_lastname" placeholder="W Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-warning" for="w_firstname">W First Name</label>
                                        <input type="text" class="form-control" value="{{request()->w_firstname}}" name="w_firstname" id="w_firstname" placeholder="W First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-warning" for="w_middlename">W Middle Name</label>
                                        <input type="text" class="form-control" value="{{request()->w_middlename}}" name="w_middlename" id="w_middlename" placeholder="W Middle Name">
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
                        <th>DATE</th>
                        <th>DREG</th>
                        <th>G_NAME</th>
                        <th>W_NAME</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($marriages as $marriage)
                        <tr align="center">
                            <td class="align-middle">{{$marriage->LCR}}</td>
                            <td class="align-middle">{{$marriage->DATE}}</td>
                            <td class="align-middle">{{$marriage->DREG}}</td>
                            <td class="align-middle">{{$marriage->g_name}}</td>
                            <td class="align-middle">{{$marriage->w_name}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-danger text-center">
                                    No record/s found
                                </div>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="mt-3">
                {{$marriages->links()}}
            </div>
        </div>
    </div>
@endsection
