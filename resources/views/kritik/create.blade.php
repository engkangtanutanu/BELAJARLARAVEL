@extends('layout.master')

@section('title', 'Buat Data')

@push('script')
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endpush

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Masukkan Kritik</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Data Kritik</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('kritik.store')}}" method="POST">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">User</label>
                                        <input type="text" name="nama" id="nama" class="form-control" disabled value="{{ auth()->user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="film">Film</label>
                                        <input type="text" name="film" id="film" class="form-control" disabled value="{{ $film->judul }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Enter Content Kritik"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="point">Point</label>
                                        <textarea name="point" id="point" cols="30" rows="10" class="form-control" placeholder="Enter Point Kritik"></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
@endsection