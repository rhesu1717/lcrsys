@extends('layouts.login')
    @section('content')
      <div class="card card-outline card-primary">
          <div class="card-header text-center">
              <a href="" class="h1"><img src="/images/meyclogo.png" width="120" alt="" srcset=""></a>
          </div>
          {{-- @if (session('username'))
              error
          @endif --}}
          @error('username')
            <div class="alert alert-danger" role="alert">
              The provided credentials do not match our records.
            </div>
          @enderror
          <div class="card-body">
            <form action="{{route('login.authenticate')}}" method="POST">
              @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
            </form>
          </div>
      </div>
    @endsection