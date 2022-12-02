@extends('layouts.master')

    @section('breadcrumb')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Accounts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Accounts</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    @endsection

    @section('content')
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card-header">
                <a href="/account/addview" class="btn btn-outline-success float-right"><span class="fas fa-plus"></span> Add</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr align="center">
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th><span class="fas fa-cogs"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td align="center">{{$user->username}}</td>
                                <td align="center">{{$user->role}}</td>
                                <td align="center">
                                    <a href="{{route('account.editview', ['id'=>$user->id])}}" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Update account"><span class="fas fa-edit"></span></a>
                                    <a href="{{route('account.passview', ['id'=>$user->id])}}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Change password"><span class="fas fa-lock"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="ml-3 mt-3">
                {{ $users->links() }}
            </div>
        </div>
    @endsection