@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengesahan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" wiitemh="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Program Studi</th>
                            <th>Semester</th>
                            <th>Matakuliah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rps as $item)
                            <tr>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>{{ $item->matakuliah }}</td>
                                <td>
                                    @if ($item->keterangan == 'Belum Tersedia')
                                        <a href="{{ url('setuju/'. $item->id_rps) }}" class="btn btn-success btn-flat btn-sm ml-1 btn-setuju">Setuju</a>
                                        <a href="{{ url('tolak/'. $item->id_rps) }}" class="btn btn-danger btn-flat btn-sm ml-1 btn-setuju">Tolak</a>
                                    @endif
                                    @if ($item->keterangan == 'Tersedia')
                                        <span class="badge py-1 badge-success">{{ $item->keterangan }}</span>
                                    @endif
                                    @if ($item->keterangan == 'Ditolak')
                                        <span class="badge py-1 badge-danger">{{ $item->keterangan }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection