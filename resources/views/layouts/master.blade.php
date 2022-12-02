@include('components/header')

  @include('components/navbar')

  {{-- @include('components/sidebar') --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="app">
    @yield('breadcrumb')
    <!-- Main content -->
    <div class="content">
      <div class="container">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('components/footer')