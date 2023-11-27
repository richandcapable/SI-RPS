@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Input RPS</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <div class="pb-3">
                    <a href="tambah" class="btn btn-primary">Tambah Data</a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Matakuliah</th>
                            <th>Matakuliah</th>
                            <th>Deskripsi</th>
                            <th>File</th>
                            <th>Dosen Pengampu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rps as $item)      
                        <tr>
                            <td>{{ $item->matakuliah->kode }}</td>
                            <td>{{ $item->matakuliah->matakuliah }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td class="text-center">                                            
                                @if (!($item->file))                                                                                            
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-plus-circle"></i></button>
                                @else
                                    <a class="btn btn-outline-success btn-sm" href="{{ asset('rps/'. $item->file) }}" target="_blank">{{ $item->file }}</a>
                                @endif                                        
                            </td>
                            <td>{{ $item->dosen->dosen }}</td>
                            <td>
                                {{-- update/{{ $item->id_rps }} --}}
                                <a href="{{ url('edit', $item->id_rps) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ url('hapus', $item->id_rps) }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

@endsection