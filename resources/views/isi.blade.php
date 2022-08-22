@extends('layouts/main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah catatan baru</h1>
</div>

<div class="col-lg-5">
    <form method="post">
    @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>

        <div class="mb-3">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" class="form-control" id="jam" name="jam">
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi">
        </div>

        <div class="mb-3">
            <label for="suhu" class="form-label">Suhu</label>
            <input type="text" class="form-control" id="suhu" name="suhu">
        </div>


        <a href="/catatan" class="btn btn-outline-success"><- Kembali ke catatan</a>
        
        <button type="submit" class="btn btn-outline-primary ">Tambah catatan</button>
    </form>
    <a href="/" class="btn btn-outline-dark mt-2"><- Kembali ke home</a>
</div>


@endsection