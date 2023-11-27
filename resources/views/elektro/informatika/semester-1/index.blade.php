@extends('layouts.main')

@section('content')
<div class="container px-4 px-lg-5">
    <section class="content">
        <h3>RPS Program Studi Teknik Informatika - Semester 1</h3>
        Tahun Ajaran 2023
        <div class="container">
            <table class="table">
              <thead class="thead-z">
                <tr>
                  <th scope="col">Matakuliah</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Detail</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rps as $item)
                @if (($item->prodi_id == 14) && ($item->semester_id == 1))
                  <tr>
                    <td>{{ $item->matakuliah->matakuliah }}</td>
                    <td style="text-align: justify; font-size: 16px;"><small>{{ $item->deskripsi }}</small></td>
                    <td>
                      @if ($item->keterangan == 'Belum Tersedia')
                        <a href="#">Lihat Detail</a>
                      @endif
                      @if ($item->keterangan == 'Tersedia')
                        <a href="{{ asset('rps/'. $item->file) }}">Lihat Detail</a>
                      @endif
                    </td>
                    <td>{{ $item->keterangan }}</td>
                  </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
    </section>
</div>
@endsection