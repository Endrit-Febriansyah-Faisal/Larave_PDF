<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use PDF;

class SiswaController extends Controller
{
    public function index()
	{
        $siswa = DB::table('siswa')->get();

		// $siswa = Siswa::all();
		return view('siswa',['siswa'=>$siswa]);
	}

    public function tambah()
    {
    	return view('siswa_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required|',
            'nis' => 'required',
    		'alamat' => 'required'
    	]);
 
        Siswa::create([
    		'nama' => $request->nama,
    		'nis' => $request->nis,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/siswa');
    }

    public function edit($id)
{
   $siswa = Siswa::find($id);
   return view('siswa_edit', ['siswa' => $siswa]);
}

public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'nis' => 'required',
	   'alamat' => 'required'
    ]);
 
    $siswa = Siswa::find($id);
    $siswa->nama = $request->nama;
    $siswa->nis = $request->nis;
    $siswa->alamat = $request->alamat;
    $siswa->save();
    return redirect('/siswa');
}

public function delete($id)
{
    $siswa = Siswa::find($id);
    $siswa->delete();
    return redirect('/siswa');
}

    public function cetak_pdf()
    {
    	$siswa = Siswa::all();
        view()->share('siswa',$siswa);
 
    	$pdf = PDF::loadview('siswa',['siswa'=>$siswa]);
    	return $pdf->download('laporan-siswa.pdf');
    }
 
// 	public function export_excel()
// 	{
//        $excel = Excel::loadView('siswa');

// 		return $excel->download('siswa.xlsx');
// 	}
 }
