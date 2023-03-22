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
                        <div class="col-sm mb-2">
                            {{-- <livewire:dasos-search></livewire:dasos-search> --}}
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#searchMR"> Search MR</button>
                        </div>
                    </div>

                    {{-- Modal Search MR --}}
                    <div class="modal fade" id="searchMR" tabindex="-1" aria-labelledby="searchMR" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pencarian Data Rekam Medis</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                {{-- <div class="modal-body">
                                    <form method="post" action="{{route('searchMR')}}">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Nama:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-2">
                                            <label for="message-text" class="col-form-label">Alamat:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">No Identitas:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <table class="table table-stripped mt-3">
                                            <thead>
                                                <th>No.MR</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>kunjungan Terakhir</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($result as $item)
                                                <td>{{$item->mr}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->alamat}}</td>
                                                <td></td>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div> --}}
                                <input class="typeahead form-control" id="cari" type="text">

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Cari <i
                                            class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Search MR --}}


                    <h5 class="card-header text-center"></h5>

                    <div class="row mb-2 mt-3">
                        {{-- <select class="typeahead form-control" style="width:500px;" name="cari" id="cari"></select>
                        --}}
                        <input type="search" id="cari" name="cari" data-provide="typeahead" placeholder="Search"
                            class="typeahead form-control" />

                        <script type="text/javascript">
                            var route = "{{ url('searchMR') }}";
                      
                                                $('#cari').typeahead({
                                                        source: function (query, process) {
                                                            return $.get(route, {
                                                                query: query
                                                            }, function (data) {
                                                                return process(data);
                                                            });
                                                        }
                                                    });
                    
                        </script>

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