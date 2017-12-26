<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

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

    	return back()->with('success', 'Konfirmasi anda berhasil, terimakasih');
    }
}
