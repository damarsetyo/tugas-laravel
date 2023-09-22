@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Ubah Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="number" name="kode" id="kode" class="form-control @error('kode') is-invalid @enderror" placeholder="Enter Kode" value="{{ $anggota[0]->kode }}">
                </div>
                @error('kode')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror " placeholder="Enter Nama" value="{{ $anggota[0]->nama }}">
                </div>
                @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="custom-select" name="jk">
                        <option selected disabled></option>
                        <option>LAKI-LAKI</option>
                        <option>PERUMPUAN</option>
                    </select>
                </div>
                @error('jk')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="custom-select" name="jurusan">
                        <option selected disabled>Pilih Jurusan</option>
                        <option>RPL</option>
                        <option>DPIB</option>
                        <option>TP</option>
                        <option>TFLM</option>
                        <option>TEI</option>
                        <option>TITL</option>
                        <option>TKJ</option>
                    </select>
                </div>
                @error('jurusan')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>No. Telepon</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                        <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka">
                    </div>
                </div>
                @error('tlp')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat"></textarea>
                </div>
                @error('alamat')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection