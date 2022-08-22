@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>
      <form action="/register" method="POST">
        @csrf
    
        <div class="form-floating">
          <input type="text" name="nama" class="form-control rounded-top" id="nama" placeholder="Rakhsha Nabil">
          <label for="nama">Nama Lengkap</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="rakhshagamtenk@gmail.com">
          <label for="email">Email</label>
        </div>
        <div class="form-floating">
          <input type="text" name="NIK" class="form-control rounded-bottom" id="NIK" placeholder="12345">
          <label for="NIK">NIK</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
      </form>
      <small class="d-block text-center mt-2">
        Sudah registrasi? <a href="/login" class="login">Login sekarang!</a>
      </small>
    </main>
  </div>
</div>


@endsection