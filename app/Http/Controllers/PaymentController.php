<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\Events\userConfirmed;
use App\Events\paymentValidation;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // validasi value
    	$this->validate($request, [
    		'bank_id'			=>	'required',
    		'no_rekening'		=>	'required',
    		'name_rekening'		=>	'required',
    		'nominal'			=>	'required',
    		'date'				=>	'required',
    		'peserta_id'		=>	'required',
    	]);

    	// upload gambar
    	request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('storage/payments'), $imageName);
        
    	// input ke database
    	$payment = Payment::create([
    		'code'				=>	'PAY-'.$request->peserta_id.'-'.time(),
    		'bank_id'			=>	$request->bank_id,
    		'no_rekening'		=>	$request->no_rekening,
    		'name_rekening'		=>	$request->name_rekening,
    		'nominal'			=>	$request->nominal,
    		'date'				=>	$request->date,
    		'peserta_id'		=>	$request->peserta_id,
    		'attach'			=>	$imageName,
    	]);

        event(new userConfirmed($payment));
    	return back()->with('success', 'Konfirmasi anda berhasil, terimakasih');
    }

    public function index($stat)
    {
        if ($stat == 'new') {
            $payments = Payment::where('stat', 0)
                        ->orderBy('created_at', 'desc')->get();
        }elseif ($stat == 'valid') {
            $payments = Payment::where('stat', 1)
                        ->orderBy('created_at', 'desc')->get();
        }elseif ($stat == 'block') {
            $payments = Payment::where('stat', 2)
                        ->orderBy('created_at', 'desc')->get();
        }

        return view('payments.index', compact('payments'));
    }

    public function validasi($id, $stat)
    {
        $payment = Payment::findOrFail($id);
        $payment->stat = $stat;
        $payment->save();

        event(new paymentValidation($payment));
        return back()->with('success', 'Pembayaran berhasil di validasi');
    }
}
