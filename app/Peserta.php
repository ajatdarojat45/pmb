<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
    	'code', 'nik', 'name', 'address', 'desa_id', 'email', 'phone', 'bank_id', 'no_rekening', 'nama_rekening', 'ahli_waris', 'upline_id', 'sponsor_id', 'fimz_id', 'kelas_id',
    ];

    public function kelas()
    {
    	return $this->belongsTo(Kelas::class);
    }

    public function payment()
    {
    	return $this->hasOne(Payment::class);
    }
}
