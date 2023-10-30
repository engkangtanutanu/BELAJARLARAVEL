@extends('layout.master')
@section('title', 'Peran')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Peran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('peran.store', $film->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter judul Film" disabled value="{{ $film->judul }}">
                        </div>
                        <div class="form-group">
                                        <label for="cast">Cast</label>
                                        <select name="cast" id="cast" class="form-control">
                                            
                                            <option disabled selected>--Pilih Salah Satu--</option>
                                            @foreach ($casts as $cast)
                                                <option value="{{ $cast->id }}">{{ $cast->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>                        
                        <div class="form-group">
                            <label for="nama">Nama Peran</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Enter Nama Peran">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection