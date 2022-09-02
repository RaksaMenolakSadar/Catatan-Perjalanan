@extends('layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome to user list</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/" class="btn btn-outline-success mb-2">Kembali ke halaman home</a>
  <a href="/isi" class="btn btn-outline-primary mb-2">Tambah catatan</a>
    <table class="table table-striped table-sm">
      <thead class="table-light border-primary">
        <tr>
          <th scope="col">No</th>
          <th scope="col">tanggal</th>
          <th scope="col">jam</th>
          <th scope="col">lokasi</th>
          <th scope="col">suhu</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($data as $catatan)
      <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $catatan->tanggal }}</td>
      <td>{{ $catatan->jam }}</td>
      <td>{{ $catatan->lokasi }}</td>        
      <td>{{ $catatan->suhu }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
</div>

@endsection