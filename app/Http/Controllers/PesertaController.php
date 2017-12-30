<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Peserta;
use Illuminate\Http\Request;
use App\Events\userRegistered;
use App\Jobs\sendUserEmailAfterRegistered;

class PesertaController extends Controller
{
    public function storeMember(Request $request)
    {
    	$this->validate($request, [
    		'fimz_id'	=> 'required',
    		'nik'		=> 'required',	
    		'name'		=> 'required',
    		'email'		=> 'required',
    		'phone'		=> 'required',
    		'kelas_id'	=> 'required',
    	]);

    	$peserta = Peserta::create([
    		'code'		=> 'PMB-'.$request->kelas_id.'-'.time(),
    		'fimz_id'	=> $request->fimz_id,
    		'nik'		=> $request->nik,
    		'name'		=> $request->name,
    		'email'		=> $request->email,
    		'phone'		=> $request->phone,
    		'kelas_id'	=> $request->kelas_id,
    	]);

        event(new userRegistered($peserta));
        // dispatch(new sendUserEmailAfterRegistered($peserta));

    	return redirect()->route('peserta/berhasil', ['code' => $peserta->code]);
    }

    public function storeNew(Request $request)
    {
        $this->validate($request, [
            'nik'           => 'required',  
            'name'          => 'required',
            'address'       => 'required',
            'desa_id'       => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'bank_id'       => 'required',
            'no_rekening'   => 'required',
            'nama_rekening' => 'required',
            'ahli_waris'    => 'required',
            'upline_id'     => 'required',
            'sponsor_id'    => 'required',
            'kelas_id'      => 'required',
        ]);

        $peserta = Peserta::create([
            'code'      => 'PMB-'.$request->kelas_id.'-'.time(),
            'nik'           => $request->nik,  
            'name'          => $request->name,
            'address'       => $request->address,
            'desa_id'       => $request->desa_id,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'bank_id'       => $request->bank_id,
            'no_rekening'   => $request->no_rekening,
            'nama_rekening' => $request->nama_rekening,
            'ahli_waris'    => $request->ahli_waris,
            'upline_id'     => $request->upline_id,
            'sponsor_id'    => $request->sponsor_id,
            'kelas_id'      => $request->kelas_id,
        ]);

        // kirim email
        // Mail::to($peserta->email)->send(new sendUserEmailAfterRegister($peserta));

        event(new userRegistered($peserta));
        // dispatch(new sendUserEmailAfterRegistered($peserta));

        return redirect()->route('peserta/berhasil', ['code' => $peserta->code]);
    }

    public function berhasil($code)
    {
    	$peserta = Peserta::where('code', $code)->first();

    	return view('pesertas.berhasil', compact('peserta'));
    }

    public function search(Request $request)
    {
    	$peserta = Peserta::where('code', $request->code)->first();
        $banks = Bank::orderBy('name', 'asc')->get();

    	return view('pesertas.detail', compact('peserta', 'banks'));
    }

    public function index($param)
    {
        if ($param == 'new') {
            $pesertas = Peserta::doesnthave('payment')->get();
        }elseif ($param == 'confirm') {
            $pesertas = Peserta::whereHas('payment', function($query){
                                        $query->where('stat', 0); })
                                    ->get();
        }elseif ($param == 'valid') {
            $pesertas = Peserta::whereHas('payment', function($query){
                                        $query->where('stat', 1); })
                                    ->get();
        }elseif ($param == 'block') {
            $pesertas = Peserta::whereHas('payment', function($query){
                                        $query->where('stat', 2); })
                                    ->get();
        }

        return view('pesertas.index', compact('pesertas'));
    }
}
