@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                <td>{{ $item->keterangan }}</td>
                                {{-- <td style="white-space: nowrap;">
                                @if (!($item->keterangan))
                                    Belum Disetujui
                                @else
                                    @if ($item->keterangan == 'Disetujui')
                                        <span>{{ $item->keterangan }}</span>
                                    @elseif($item->keterangan == 'Ditolak')
                                        <span>{{ $item->keterangan }}</span>
                                    @endif
                                </td>
                                @endif --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection
