@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anggota</a></li>
                        <li class="breadcrumb-item active">Detail Anggota</li>
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
                            <h3 class="card-title">Detail Anggota : {{ $anggota[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Anggota</label>
                                    <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{ $anggota[0]->id }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control" name="kode" id="kode_anggota" placeholder="Masukan Kode Anggota" value="{{ $anggota[0]->kode }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Anggota" value="{{ $anggota[0]->nama }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jk" id="jk" placeholder="Masukan Jenis Kelamin Anggota" value="{{ $anggota[0]->jk }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Masukan jurusan Anggota" value="{{ $anggota[0]->jurusan }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>No Tlp.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Nomer Telepon" value="{{ $anggota[0]->tlp }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat" disabled>{{ $anggota[0]->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                            <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection