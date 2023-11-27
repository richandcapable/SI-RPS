<?php

namespace App\Http\Controllers;

use App\Models\rpsItem;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $rps = rpsItem::join('jurusans', 'rps_items.jurusan_id', '=', 'jurusans.id')
        ->join('prodis', 'rps_items.prodi_id', '=', 'prodis.id')
        ->join('semesters', 'rps_items.semester_id', '=', 'semesters.id')
        ->join('matakuliahs', 'rps_items.matakuliah_id', '=', 'matakuliahs.id')
        ->get();

        return view('kajur.monitoring', [
            "title" => "Monitoring",
            "rps" => $rps
        ]);
    }
}
