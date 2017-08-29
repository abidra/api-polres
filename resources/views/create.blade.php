@extends('layouts.app')
@section('content')
<div class="col-md-12">
   <div class="card">
      <div class="card-header">
         <strong>Tilang</strong>
         <small>Form</small>
      </div>
      <div class="card-body">
         <form id="tilangForm" role="form" method="POST" action="{{ route('home.create.post') }}">
            {{ csrf_field() }}			
            <div class="form-group">
               <label for="company">No. Tilang</label>
               <input type="text" class="form-control" id="no_tilang" name="no_tilang" placeholder="Masukan No. Tilang">
            </div>
            <div class="form-group">
               <label for="vat">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
               <label for="street">Alamat</label>
               <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
               <label for="country">TTL</label>
               <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Masukan TTL">
            </div>
            <div class="form-group">
               <label for="country">No. KTP</label>
               <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukan No. KTP">
            </div>
            <div class="form-group">
               <label for="country">Umur</label>
               <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukan Umur">
            </div>
            <div class="form-group">
               <label for="country">Pendidikan</label>
               <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan">
            </div>
            <div class="form-group">
               <label for="country">Pekerjaan</label>
               <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan">
            </div>
            <div class="form-group">
               <label for="status">Status</label>
               <select id="select" name="status" class="form-control">
                  <option value="0">di Polres</option>
                  <option value="1">di Pengadilan</option>
                  <option value="2">di Kejaksaan</option>
                  <option value="3">diambil</option>
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