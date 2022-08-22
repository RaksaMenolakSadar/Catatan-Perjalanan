@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
<main class="form-signin w-100 m-auto">
  <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
    <form action="/login" method="post">
    @csrf
    
    <div class="form-floating">
      <input type="text" name="NIK" class="form-control rounded-top" id="NIK" placeholder="12345" required>
      <label for="NIK">NIK</label>
    </div>

    <div class="form-floating">
      <input type="text" name="nama" class="form-control rounded-top" id="nama" placeholder="Rakhsha Nabil">
      <label for="nama">Nama Lengkap</label>
    </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-2">
        Belum registrasi? <a class="register" href="/register">Registrasi sekarang!</a>
      </small>
    </main>
  </div>
</div>
@endsection