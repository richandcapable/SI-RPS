@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah RPS</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option disabled selected>-- Pilih Jurusan --</option>
                            @foreach ($jurusan as $item)
                            <option value="{{ $item->id }}">{{ $item->jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi:</label>
                        <select class="form-control" id="prodi" name="prodi">
                            <option disabled selected>-- Pilih Program Studi --</option>
                            @foreach ($prodi as $item)
                            <option value="{{ $item->id }}">{{ $item->prodi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Semester:</label>
                        <select class="form-control" id="semester" name="semester">
                            <option disabled selected>-- Pilih Semester --</option>
                            @foreach ($semester as $item)
                            <option value="{{ $item->id }}">{{ $item->semester }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matakuliah">Nama Matakuliah:</label>
                        <select class="form-control" id="matakuliah" name="matakuliah">
                            <option disabled selected>-- Pilih Matakuliah --</option>
                            @foreach ($matakuliah as $item)
                            <option value="{{ $item->id }}">{{ $item->matakuliah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dosen">Dosen Pengampu:</label>
                        <select class="form-control" id="dosen" name="dosen">
                            <option disabled selected>-- Pilih Dosen --</option>
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
