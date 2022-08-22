@extends('layouts/main')

@section('container')
<h1>Homepage</h1>
<h5>Catatan Perjalanan</h5>

<div class="container py-4">

<div class="p-5 mb-4 bg-light border rounded-3">
    <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Ini adalah web catatan perjalanan</h1>
    <p class="col-md-8 fs-4">Masih dalam pengembangan, hasil akhir bisa tidak menyerupai bentuk ini</p>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
    <div class="h-100 p-5 text-white bg-dark rounded-3">
        <h2>Ingin melihat catatan?</h2>
        <p>Click tombol dibawah ini :D</p>
        <a href="/catatan" class="btn btn-outline-light" type="button">Lihat</a>
    </div>
</div>

<div class="col-md-6">
    <div class="h-100 p-5 bg-light border rounded-3">
        <h2>Ingin menambah catatan?</h2>
        <p>Click tombol dibawah ini :)</p>
        <a href="/isi" class="btn btn-outline-dark" type="button">Tambah</a>
    </div>
</div>

</div>

</div>


@endsection