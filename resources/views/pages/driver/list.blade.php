@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> List of Drivers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">List of Drivers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <a href="{{route('driver.create')}}" class="btn btn-sm btn-outline-success"><span class="fas fa-plus"> Create</span></a>
            </div>
        </div>
        <div class="card-body">
            list
        </div>
    </div>
@endsection
