<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Jurusan;
use App\Models\rpsItem;
use App\Models\Semester;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rps = rpsItem::with('jurusan', 'prodi', 'semester', 'matakuliah', 'dosen')->get();
        return view('admin.input', [
            'title' => 'Input RPS',
            'rps' => $rps
        ]);

        // $matakuliah = Matakuliah::all();
        // $dosen      = Dosen::all();

        // $rps = rpsItem::join('matakuliahs', 'rps_items.matakuliah_id', '=', 'matakuliahs.id')
        //     ->join('dosens', 'rps_items.dosen_id', '=', 'dosens.id')->get();

        // return view('admin.input', [
        //     'title'      => 'Input',
        //     'rps'        => $rps,
        //     'matakuliah' => $matakuliah,
        //     'dosen'      => $dosen
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan    = Jurusan::all();
        $prodi      = Prodi::all();
        $semester   = Semester::all();
        $matakuliah = Matakuliah::all();
        $dosen      = Dosen::all();

        return view('admin.tambah', [
            'title'      => 'Tambah',
            'jurusan'    => $jurusan,
            'prodi'      => $prodi,
            'semester'   => $semester,
            'matakuliah' => $matakuliah,
            'dosen'      => $dosen
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file;
        $uploadPath =  'rps/';

        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move($uploadPath, $filename); 

        rpsItem::create([
            'jurusan_id'    => $request->jurusan,
            'prodi_id'      => $request->prodi,
            'semester_id'   => $request->semester,
            'matakuliah_id' => $request->matakuliah,
            'deskripsi'     => $request->deskripsi,
            'dosen_id'      => $request->dosen,
            'file'          => $filename
        ]);

        return redirect('input')->withToastSuccess('Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $rps = rpsItem::find($id);

        if (!$rps) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $dosen = Dosen::all(); // Query untuk mengambil data dosen dari tabel dosen

        return view('admin.edit', ['title' => 'Update', 'rps' => $rps, 'dosen' => $dosen]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file;
        $uploadPath =  'rps/';

        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move($uploadPath, $filename);

        $id_rps = $request->id;
        $deskripsi = $request->input('deskripsi');
        $dosen_id = $request->input('dosen');

        $update = rpsItem::where('id_rps', $id_rps)->update([
            'deskripsi' => $deskripsi,
            'dosen_id' => $dosen_id,
            'file' => $filename
            // tambahkan kolom-kolom lain yang ingin diupdate sesuai kebutuhan
        ]);

        if ($update) {
            return redirect('input')->withToastSuccess('Data Berhasil Diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rps = rpsItem::where('id_rps', $id);
        $rps->delete();
        return back()->withToastSuccess('Data Berhasil Dihapus!');
    }
}
