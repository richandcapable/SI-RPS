<?php

namespace App\Http\Controllers;

use App\Models\rpsItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengesahanController extends Controller
{
    public function index()
    {
        $rps = rpsItem::join('jurusans', 'rps_items.jurusan_id', '=', 'jurusans.id')
        ->join('prodis', 'rps_items.prodi_id', '=', 'prodis.id')
        ->join('semesters', 'rps_items.semester_id', '=', 'semesters.id')
        ->join('matakuliahs', 'rps_items.matakuliah_id', '=', 'matakuliahs.id')
        ->get();

        return view('kaprodi.pengesahan', [
            "title"      => "Pengesahan",
            "rps"        => $rps
        ]);
    }

    public function setuju($id)
    {
      $data = DB::table('rps_items')->where('id_rps', $id)->first();
      $status = $data->keterangan;

      if($status == "Belum Tersedia"){
        DB::table('rps_items')->where('id_rps', $id)->update([
          'keterangan'=> 'Tersedia'
        ]);
      }else{
        DB::table('rps_items')->where('id_rps', $id)->update([
          'keterangan'=> 'Belum Tersedia'
        ]);
      }
      return redirect('pengesahan')->withToastSuccess('RPS Disetujui!');;
    }

    public function tolak($id)
    {
      $data = DB::table('rps_items')->where('id_rps', $id)->first();
      $status = $data->keterangan;

      if($status == "Belum Tersedia"){
        DB::table('rps_items')->where('id_rps', $id)->update([
          'keterangan'=> 'Ditolak'
        ]);
      }
      return redirect('pengesahan')->withToastSuccess('RPS Disetujui!');;
    } 

    // public function tolak($id)
    // {                  
    //   $data = [
    //     'keterangan'   => 'Ditolak'
    //   ];
      
    //   $update = rpsItem::where('id_rpsslot', $id)->update($data);
    //   if ($update) {
    //     return back()->with('update', 'Data RPS Telah Ditolak');
    //   }
    // }
}
