<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    	'code', 'no_rekening', 'name_rekening', 'nominal', 'date', 'attach', 'peserta_id', 'bank_id',
    ];

    public function peserta()
    {
    	return $this->belongsTo(Peserta::class);
    }

    public function bank()
    {
    	return $this->belongsTo(Bank::class);
    }
}
