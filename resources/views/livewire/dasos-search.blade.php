<label for="">Search</label>
<input wire:model="search" type="search" class="form-control" name="" id="" value=""
    placeholder="Cari Pasien (Nama Pasien)">




<div class="col-sm mb-3 mt-3">
    {{-- <label for="">Layanan</label> --}}
    <select class="js-example-basic-single form-control">
        @foreach($items as $post)
        <option selected>{{ $post->nama }}</option>
        @endforeach
    </select>
</div>