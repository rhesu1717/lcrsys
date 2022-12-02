@extends('layouts.master')

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Create New driver</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create New driver</li>
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
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">Last Name<span class="text-danger"> *</span></label>
                        <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" placeholder="Last Name">
                        <div class="invalid-feedback">
                            @error('lastname')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="license_no">License No.<span class="text-danger"> *</span></label>
                        <input type="text" name="license_no" id="license_no" class="form-control form-control-sm" placeholder="License No.">
                        <div class="invalid-feedback">
                            @error('license_no')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">First Name<span class="text-danger"> *</span></label>
                        <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" placeholder="First Name">
                        <div class="invalid-feedback">
                            @error('firstname')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob">Date of Birth<span class="text-danger"> *</span></label>
                        <input type="date" name="dob" id="dob" class="form-control form-control-sm" placeholder="Date of Birth">
                        <div class="invalid-feedback">
                            @error('dob')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="middlename">Middle Name<span class="text-danger"> *</span></label>
                        <input type="text" name="middlename" id="middlename" class="form-control form-control-sm" placeholder="Middle Name">
                        <div class="invalid-feedback">
                            @error('middlename')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_no">Contact No.<span class="text-danger"> *</span></label>
                        <input type="number" name="contact_no" id="contact_no" class="form-control form-control-sm" placeholder="Contact No.">
                        <div class="invalid-feedback">
                            @error('contact_no')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Address<span class="text-danger"> *</span></label>
                        <textarea name="address" id="address" class="form-control form-control-sm is-invalid" rows="5">Address</textarea>
                        <div class="invalid-feedback">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
