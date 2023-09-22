@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Buku</a></li>
                        <li class="breadcrumb-item active">Edit Buku</li>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Petugas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_petugas">ID Petugas</label>
                                    <input class="form-control @error('id') is-invalid @enderror" type="text" name="id" id="id" placeholder="Masukan ID" value="{{ $petugas[0]->id }}">
                                </div>
                                @error('id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control @error('nama_petugas') is-invalid @enderror" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama Petugas" value="{{ $petugas[0]->nama_petugas }}">
                                </div>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control @error('jabatan_petugas') is-invalid @enderror" type="text" name="jabatan_petugas" id="jabatan_petugas" placeholder="Masukan Jabatan" value="{{ $petugas[0]->jabatan_petugas }}">
                                </div>
                                @error('jabatan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="tlp_petugas" name="tlp_petugas" id="tlp_petugas">Telepon Petugas</label>
                                    <input class="form-control @error('tlp_petugas') is-invalid @enderror" type="text" name="tlp_petugas" id="tlp_petugas" placeholder="Masukan Telepon Petugas" value="{{ $petugas[0]->tlp_petugas }}">
                                </div>
                                @error('telepon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="alamat_petugas" name="alamat_petugas" id="alamat_petugas">Alamat Petugas</label>
                                    <input class="form-control @error('alamat_petugas') is-invalid @enderror" type="text" name="alamat_petugas" id="alamat_petugas" placeholder="Masukan Alamat Petugas" value="{{ $petugas[0]->alamat_petugas }}">
                                </div>
                                @error('telepon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection