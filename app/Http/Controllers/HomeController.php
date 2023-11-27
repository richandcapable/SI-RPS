<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\rpsItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function elektro()
    {
        return view('elektro.index', [
            "title" => "Teknik Elektro"
        ]);
    }

    public function informatika()
    {
        return view('elektro.informatika.index', [
            "title" => "D3 Teknik Informatika"
        ]);
    }

    public function semester1ti()
    {
        $rps = rpsItem::with('jurusan', 'prodi', 'semester', 'matakuliah', 'dosen')->get();
        return view('elektro.informatika.semester-1.index', [
            "title" => "Semester 1",
            "rps" => $rps
        ]);
    }

    public function sikc()
    {
        return view('elektro.sikc.index', [
            "title" => "D3 Sistem Informasi Kota Cerdas"
        ]);
    }

    public function semester1sikc()
    {
        $rps = rpsItem::with('jurusan', 'prodi', 'semester', 'matakuliah', 'dosen')->get();
        return view('elektro.sikc.semester-1.index', [
            "title" => "Semester 1",
            "rps" => $rps
        ]);
    }
}
