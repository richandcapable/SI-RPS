@extends('layouts.main')

@section('content')
<div class="container px-4 px-lg-5">
    <section class="content">
        <h3>RPS Poliban</h3>
        Tahun Ajaran 2023 
        <div class="container">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col"><a href="#">RPS Teknik Sipil</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">RPS Teknik Mesin</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="{{ url('elektro') }}">RPS Teknik Elektro</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">RPS Akutansi</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">RPS  Administrasi Bisnis</a></th>
              </tr>
            </thead>         
          </table>
        </div>
    </section>
</div>
@endsection