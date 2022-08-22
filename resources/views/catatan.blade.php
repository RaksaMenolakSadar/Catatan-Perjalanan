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
  <a href="/isi" class="btn btn-outline-primary mb-2">Tambah catatan</a>
    <table class="table table-striped table-sm">
      <thead class="table-light border-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">tanggal</th>
          <th scope="col">jam</th>
          <th scope="col">lokasi</th>
          <th scope="col">suhu</th>
        </tr>
      </thead>

      <tbody>
       
          <!--  -->
        
      </tbody>
    </table>
</div>

@endsection