@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Birth Certificate</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Birth Certificate</li>
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
                <div class="collapse {{(request()->has(['lastname','firstname','middlename','birthdate'])? 'show':'')}}" id="collapseExample">
                {{-- <div class="collapse" id="collapseExample"> --}}
                    <div class="card card-body">
                        <form action="{{route('birth.index')}}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="lastname">Last Name</label>
                                        <input type="text" class="form-control" value="{{request()->lastname}}" name="lastname" id="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="firstname">First Name</label>
                                        <input type="text" class="form-control" value="{{request()->firstname}}" name="firstname" id="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="middlename">Middle Name</label>
                                        <input type="text" class="form-control" value="{{request()->middlename}}" name="middlename" id="middlename" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="birthdate">Date of Birth mm/dd/yyyy</label>
                                        <input type="text" class="form-control" value="{{request()->birthdate}}" name="birthdate" id="birthdate" placeholder="Date of Birth">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="lastname">M Last Name</label>
                                        <input type="text" class="form-control" value="{{request()->mlastname}}" name="mlastname" id="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="firstname">M First Name</label>
                                        <input type="text" class="form-control" value="{{request()->mfirstname}}" name="mfirstname" id="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <label class="input-group-text bg-primary" for="middlename">M Middle Name</label>
                                        <input type="text" class="form-control" value="{{request()->mmiddlename}}" name="mmiddlename" id="middlename" placeholder="Middle Name">
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
                        <th>MOTHER NAME</th>
                        <th>FATHER NAME</th>
                        <th>DATE</th>
                        <th>DATEMAR</th>
                        <th>DREG</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($births as $birth)
                        <tr align="center">
                            <td class="align-middle">{{$birth->LCR}}</td>
                            <td class="align-middle">{{$birth->full_name}}</td>
                            <td class="align-middle">{{$birth->mother_name}}</td>
                            <td class="align-middle">{{$birth->father_name}}</td>
                            <td class="align-middle">{{$birth->DATE}}</td>
                            <td class="align-middle">{{$birth->DATEMAR}}</td>
                            <td class="align-middle">{{$birth->DREG}}</td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
            <div class="mt-3">
                {{$births->links()}}
            </div>
        </div>
    </div>
@endsection
