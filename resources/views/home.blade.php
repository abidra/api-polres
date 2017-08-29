@extends('layouts.app')
@section('content')
<div class="card">
   <div class="card-header">
      Dashboard
   </div>
   <div class="card-body">
      <table id="example" class="display" cellspacing="0" width="100%">
         <thead>
            <tr>
               <th>No.Tilang</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No.KTP</th>
               <th>Status</th>
               <th>Tanggal Tilang</th>
			   <th>Update Terakhir</th>
            </tr>
         </thead>
         <tfoot>
            <tr>
               <th>No.Tilang</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No.KTP</th>
               <th>Status</th>
               <th>Tanggal Tilang</th>
			   <th>Update Terakhir</th>
            </tr>
         </tfoot>
      </table>
   </div>
</div>
@endsection