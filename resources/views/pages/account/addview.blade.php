@extends('layouts.master')

    @section('breadcrumb')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Add account</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add account</li>
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
                {{-- <a href="#" class="btn btn-outline-success float-right"><span class="fas fa-plus"></span> Add</a> --}}
            </div>
            <div class="card-body table-responsive">
                <form action="/account/store" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control @error('name')
                                    is-invalid
                                @enderror" placeholder="Name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control @error('username')
                                    is-invalid
                                @enderror" placeholder="Username">
                                <div class="invalid-feedback">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" id="role" class="form-control @error('role')
                                    is-invalid
                                @enderror">
                                    <option value="" selected disabled>--Select Role--</option>
                                    <option value="encoder" {{(old('role')=='encoder')? 'selected':''}}>encoder</option>
                                    <option value="admin" {{(old('role')=='admin')? 'selected':''}}>admin</option>
                                </select>
                                <div class="invalid-feedback">
                                    @error('role')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password')
                                    is-invalid
                                @enderror" placeholder="Password">
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password')
                                    is-invalid
                                @enderror" placeholder="Confirm Password">
                                <div class="invalid-feedback">
                                    @error('confirm_password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    @endsection