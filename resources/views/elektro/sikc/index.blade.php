@extends('layouts.main')

@section('content')
<div class="container px-4 px-lg-5">
    <section class="content">
        <h3>RPS Program Studi Sistem Informasi Kota Cerdas</h3>
        Tahun Ajaran 2023
        <div class="container">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col"><a href="{{ url('elektro/sikc/semester-1') }}">Semester 1</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 2</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 3</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 4</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 5</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 6</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 7</a></th>
              </tr>
              <tr>
                <th scope="col"><a href="#">Semester 8</a></th>
              </tr>
            </thead>         
          </table>
        </div>
    </section>
</div>
@endsection