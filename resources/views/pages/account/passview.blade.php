@extends('layouts.master')

    @section('breadcrumb')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Change Password</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
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
                <form action="/account/updatepass" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="form-control @error('new_password')
                                    is-invalid
                                @enderror" placeholder="New Password">
                                <div class="invalid-feedback">
                                    @error('new_password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="re_password">Re-type Password</label>
                                <input type="password" name="re_password" id="re_password" class="form-control @error('re_password')
                                    is-invalid
                                @enderror" placeholder="Re-type Password">
                                <div class="invalid-feedback">
                                    @error('re_password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    @endsection