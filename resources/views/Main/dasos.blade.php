@extends('Main.master')

@section('konten')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card">
            <h5 class="bg-primary card-header text-center">Data Sosial Pasien</h5>
            <div class="container-fluid">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-6 mb-3">
                            <form method="post" action="{{route('store')}}">
                                @csrf
                                <label for="">No.RM</label>
                                <input type="text" class="form-control" name="mr" id="mr" value=""
                                    placeholder="Otomatis">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value=""
                                placeholder="Nama Pasien" required>
                        </div>
                    </div>

                    <h5 class="card-header text-center"></h5>

                    <div class="row mb-2 mt-3">
                        <div class="col-sm-4 mb-3">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control" name="sex" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Agama</label>
                            <select class="form-control" name="agama" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="2">Katholik</option>
                                <option value="2">Budha</option>
                                <option value="2">Hindu</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Status Nikah</label>
                            <select class="form-control" name="status_nikah" aria-label="Default select example">
                                <option selected>--Choose--</option>
                                <option value="1">Belum Kawin</option>
                                <option value="2">Kawin</option>
                                <option value="2">Duda</option>
                                <option value="2">Janda</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">Pendidikan</label>
                            <select class="form-control" name="pendidikan" aria-label="Default select example">
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
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value=""
                                placeholder="Pekerjaan Pasien">
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="">NPWP</label>
                            <input type="text" class="form-control" name="npwp" id="npwp" value=""
                                placeholder="Nomor NPWP">
                        </div>
                    </div>

                    <h5 class="card-header text-center"></h5>

                    <div class="row mb-2 mt-3">
                        <div class="col-sm-3 mb-3">
                            <label for="">No.Identitas (KTP/SIM/PASPOR) </label>
                            <input type="text" class="form-control" name="no_identitas" id="no_identitas" value=""
                                placeholder="Nomor Identitas">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">No.KK</label>
                            <input type="text" class="form-control" name="no_kk" id="no_kk" value=""
                                placeholder="Nomor Kartu Keluarga">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value=""
                                placeholder="Tempat Lahir Pasien">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="1"></textarea>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="provinsi" value=""
                                placeholder="Provinsi">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">Kelurahan</label>
                            <input type="text" class="form-control" name="kelurahan" id="kelurahan" value=""
                                placeholder="Kelurahan">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" value=""
                                placeholder="kecamatan">
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="">No.Tlp</label>
                            <input type="text" class="form-control" name="no_tlp" id="no_tlp" value=""
                                placeholder="Nomor Telephone">
                        </div>
                    </div>

                    <h5 class="card-header text-center">Data Kerabat</h5>

                    <div class="row mb-2 mt-3">
                        <div class="col-sm-6 mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nm_kerabat" id="nm_kerabat" value=""
                                placeholder="Nama Kerabat">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="">Hubungan</label>
                            <input type="text" class="form-control" name="hubungan" id="hubungan" value=""
                                placeholder="Hubungan">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="">No.Tlp</label>
                            <input type="text" class="form-control" name="no_tlp_kerabat" id="no_tlp_kerabat" value=""
                                placeholder="Nomor Telephone">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="alamat_kerabat" id="alamat_kerabat" cols="30"
                                rows="1"></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="petugas" value="{{ auth()->user()->name}}">

                    <button type="submit" class="btn btn-success float-right">Simpan <i class="fa fa-save"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection