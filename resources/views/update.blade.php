@extends('layouts.app')
@section('content')
<div class="col-md-12">
   <div class="card">
      <div class="card-header">
         <strong>Tilang</strong>
         <small>Form</small>
      </div>
      <div class="card-body">
         <form id="tilangForm" role="form" method="POST" action="{{ route('home.update.post', $no_tilang) }}">
            {{ csrf_field() }}			
            <div class="form-group">
               <label for="company">No. Tilang</label>
               <input type="text" class="form-control" id="no_tilang" name="no_tilang" value="{{ $no_tilang }}" placeholder="Masukan No. Tilang">
            </div>
            <div class="form-group">
               <label for="vat">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" value="{{ $nama }}" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
               <label for="street">Alamat</label>
               <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $alamat }}" placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
               <label for="country">TTL</label>
               <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $ttl }}" placeholder="Masukan TTL">
            </div>
            <div class="form-group">
               <label for="country">No. KTP</label>
               <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $no_ktp }}" placeholder="Masukan No. KTP">
            </div>
            <div class="form-group">
               <label for="country">Umur</label>
               <input type="text" class="form-control" id="umur" name="umur" value="{{ $umur }}" placeholder="Masukan Umur">
            </div>
            <div class="form-group">
               <label for="country">Pendidikan</label>
               <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ $pendidikan }}" placeholder="Masukan Pendidikan">
            </div>
            <div class="form-group">
               <label for="country">Pekerjaan</label>
               <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $pekerjaan }}"  placeholder="Masukan Pekerjaan">
            </div>
            <div class="form-group">
               <label for="status">Status</label>
               <select id="select" name="status" class="form-control">
				@if ($status == 0)
					<option value="0" selected="selected">di Polres</option>
				@else
					<option value="0">di Polres</option>
				@endif
				@if ($status == 1)
					<option value="1" selected="selected">di Pengadilan</option>
				@else
					<option value="1">di Pengadilan</option>
				@endif
				@if ($status == 2)
					<option value="2" selected="selected">di Kejaksaan</option>
				@else
					<option value="2">di Kejaksaan</option>
				@endif
				@if ($status == 3)
					<option value="3" selected="selected">diambil</option>
				@else
					<option value="3">diambil</option>
				@endif
               </select>
            </div>
      </div>
      <div class="card-footer">
      <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
      <button type="reset" id="form_reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
      </div>
      </form>
   </div>
</div>
@endsection