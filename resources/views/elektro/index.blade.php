@extends('layouts.main')

@section('content')
<div class="container px-4 px-lg-5">
    <section class="content">
        <h3>RPS Jurusan Teknik Elektro</h3>
        Tahun Ajaran 2023
        <div class="container">
          <table class="table">
            <thead class="thead-light">
              <tr>
                  <th scope="col"><a href="">D3 Teknik Listrik</a></th>
              </tr>
              <tr>
                  <th scope="col"><a href="">D3 Elektronika</a></th>
              </tr>
              <tr>
                  <th scope="col"><a href="{{ url('elektro/informatika') }}">D3 Teknik Informatika</a></th>
              </tr>
              <tr>
                  <th scope="col"><a href="{{ url('elektro/sikc') }}">D4 Sistem Informasi Kota Cerdas</a></th>
              </tr>
              <tr>
                  <th scope="col"><a href="">D4 Teknik Rekayasa Pembangkit Energi</a></th>
              </tr>
            </thead>         
          </table>
        </div>
    </section>
</div>
@endsection