@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dokumen RPS</h1>

    <!-- DataTales Example -->
    <div class="row">
      @foreach ($rps as $item)
      @if ($item->keterangan == 'Tersedia')                                  
      <div class="col-sm-6">
        <div class="card shadow mb-4">
          <div class="card-body">
              <h3>RPS Jurusan {{ $item->jurusan }}</h3>
              <p>{{ $item->semester }}</p>
              <p>Matakuliah: {{ $item->matakuliah }}</p>
              <p>{{ $item->deskripsi }}</p>
              <a href="rps/{{ $item->file }}">Lihat Detail</a>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      </div>
</div>
@endsection