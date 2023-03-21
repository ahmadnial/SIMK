@extends('Main.master')

@section('konten')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card">
            <h5 class="bg-info card-header text-center">Registrasi Rawat Jalan</h5>
            <div class="container-fluid">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm mb-3">
                            <label for="">Search</label>
                            <input wire:model="search" type="search" class="form-control" name="" id="" value=""
                                placeholder="Cari Pasien (Nama Pasien)">
                            @foreach($dasoss as $post)
                            <li>{{ $post->name }}</li>
                            @endforeach
                        </div>
                    </div>


                    <h5 class="card-header text-center"></h5>

                    <div class="row mb-2 mt-3">
                        <div class="col-sm-4 mb-3">
                            <label for="">Kode Registrasi</label>
                            <input type="text" class="form-control" name="" id="" value="" placeholder="Otomatis">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="" id="" value="" placeholder="Otomatis">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">No.RM</label>
                            <input type="text" class="form-control" name="" id="" value="" placeholder="Otomatis">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Tanggal</label>
                            <input type="date" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Jam</label>
                            <input type="time" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="1"></textarea>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Jenis Kelamin</label>
                            <input type="time" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="time" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Umur</label>
                            <input type="text" class="form-control aria-describedby=basic-addon2" name="" id=""
                                value="">
                            {{-- <span class="input-group-text" id="basic-addon2">@example.com</span> --}}
                        </div>
                    </div>

                    <h5 class="card-header text-center"></h5>

                    <div class="row mb-2 mt-3">
                        <div class="col-sm-4 mb-3">
                            <label for="">Layanan</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="2">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="2">Magister</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Dokter/Medis</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="2">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="2">Magister</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Instalasi</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="2">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="2">Magister</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Jaminan</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="2">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="2">Magister</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">No.Peserta</label>
                            <input type="text" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Penjamin</label>
                            <input type="text" class="form-control" name="" id="" value="">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Cara Masuk</label>
                            <select class="form-control" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="2">SMA/SMK</option>
                                <option value="2">Diploma</option>
                                <option value="2">Sarjana</option>
                                <option value="2">Magister</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection