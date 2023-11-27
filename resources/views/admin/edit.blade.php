@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah RPS</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('data.update', ['id' => $rps->id_rps]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <select class="form-control" id="jurusan" name="jurusan" disabled>
                            <option value="{{ $rps->id }}">{{ $rps->jurusan->jurusan }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi:</label>
                        <select class="form-control" id="prodi" name="prodi" disabled>
                            <option value="{{ $rps->id }}">{{ $rps->prodi->prodi }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Semester:</label>
                        <select class="form-control" id="semester" name="semester" disabled>
                            <option value="{{ $rps->id }}">{{ $rps->semester->semester }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matakuliah">Nama Matakuliah:</label>
                        <select class="form-control" id="matakuliah" name="matakuliah" disabled>
                            <option value="{{ $rps->id }}">{{ $rps->matakuliah->matakuliah }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="2">{{ $rps->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="dosen">Dosen Pengampu:</label>
                        <select class="form-control" id="dosen" name="dosen">
                            <option value="" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                            <option value="{{ $item->id }}">{{ $item->dosen }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Lampirkan File RPS (PDF):</label>
                        <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah RPS</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form action="/update/{{ $rps->rps }}" method="POST" enctype="multipart/form-data">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <select class="form-control" id="jurusan" name="jurusan" disabled>
                            @foreach ($rps as $item)
                            <option value="{{ $item->id }}">{{ $item->jurusan->jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi:</label>
                        <select class="form-control" id="prodi" name="prodi" disabled>
                            @foreach ($rps as $item)
                            <option value="{{ $item->id }}">{{ $item->prodi->prodi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Semester:</label>
                        <select class="form-control" id="semester" name="semester" disabled>
                            @foreach ($rps as $item)
                            <option value="{{ $item->id }}">{{ $item->semester->semester }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matakuliah">Nama Matakuliah:</label>
                        <select class="form-control" id="matakuliah" name="matakuliah" disabled>
                            @foreach ($rps as $item)
                            <option value="{{ $item->id }}">{{ $item->matakuliah->matakuliah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="2">{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="dosen">Dosen Pengampu:</label>
                        <select class="form-control" id="dosen" name="dosen">
                            <option value="" disabled selected>-- Pilih Dosen --</option>
                            @foreach ($dosen as $item)
                            <option value="{{ $item->id }}">{{ $item->dosen}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Lampirkan File RPS (PDF):</label>
                        <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}
