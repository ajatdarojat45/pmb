<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function daftarKelas()
    {
    	$no = 0;
    	$kelases = Kelas::orderBy('created_at', 'desc')->get();

    	return view('kelas.daftarKelas', compact('kelases', 'no'));
    }

    public function detailKelas($id)
    {
    	$banks = Bank::orderBy('name', 'asc')->get();
    	$kelas = Kelas::findOrFail($id);

    	return view('kelas.detailKelas', compact('kelas', 'banks'));
    }

    public function index()
    {
        $kelases = Kelas::orderBy('date', 'desc')->get();

        return view('kelas.index', compact('kelases'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function peraturan()
    {
        $peraturan = Kelas::where('id', 0)->first();

        return view('peraturan.create', compact('peraturan'));
    }

    public function updatePeraturan(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $peraturan = Kelas::where('id', 0)->first();
        $peraturan->description = $request->description;
        $peraturan->save();

        return back()->with('success', 'Peraturan berhasil di update');
    }
}
