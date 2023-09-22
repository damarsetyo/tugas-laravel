@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Buku</a></li>
                        <li class="breadcrumb-item active">Detail Buku</li>
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
                            <h3 class="card-title">Detail Buku : {{ $buku[0]->judul }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_buku">ID Buku</label>
                                    <input class="form-control" type="text" name="id" id="id_buku" placeholder="Masukan ID" value="{{ $buku[0]->id }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kode_buku">Kode Buku</label>
                                    <input class="form-control" type="text" name="kode" id="kode_buku" placeholder="Masukan Kode Buku" value="{{ $buku[0]->kode }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukan Judul Buku" value="{{ $buku[0]->judul }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="penulis" name="penulis" id="penulis">Penulis</label>
                                    <input class="form-control" type="text" name="penulis" id="penulis" placeholder="Masukan Nama Penulis Buku" value="{{ $buku[0]->penulis }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="penerbit" name="penerbit" id="penerbit">Penerbit</label>
                                    <input class="form-control" type="text" name="penerbit" id="penerbit" placeholder="Masukan Nama Penerbit Buku" value="{{ $buku[0]->penerbit }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_terbit" name="tahun_terbit" id="tahun_terbit">Tahun Terbit</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input class="form-control" type="number" name="tahun_terbit" id="tahun_terbit" value="{{ $buku[0]->tahun_terbit }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stok" name="stok" id="stok">Stok Buku</label>
                                    <input class="form-control" type="number" name="stok" id="stok" placeholder="Masukan Stok Buku" value="{{ $buku[0]->stok }}" disabled>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection