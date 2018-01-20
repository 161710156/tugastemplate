@extends('templates.master')
@section('content')
<div class="container">
<center>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Data Siswa <span class="glyphicon glyphicon-user"></div>
  <div class="panel-body">
    <h1 class="my-4">
        <small></small>
      </h1>
  </div>

  <!-- Table -->
  <table class="table">
<th>ID</th>
<th>NIS</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Cita-Cita</th>
<th>Hobi</th>
<th>Foto</th>
@foreach($sis as $wa)
<tr>
<td>{{$wa -> id}}</td>
<td>{{$wa -> nis}}</td> 
<td>{{$wa -> nama}}</td> 
<td>{{$wa -> tempat_lahir}}</td> 
<td>{{$wa -> tanggal_lahir}}</td> 
<td>{{$wa -> alamat}}</td> 
<td>{{$wa -> cita_cita}}</td> 
<td>{{$wa -> hobi}}</td>
<td><img src="{{ asset('Fhotos/'.$wa->photo)  }}" style="max-height:125px;max-width:125px;margin-top:7px;"></td>
</tr>
@endforeach
</table></center></div></div>
</div>
@endsection