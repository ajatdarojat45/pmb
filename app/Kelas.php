<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
    	'code', 'name', 'description', 'date', 'locate', 'price', 'price_new', 'quota',
    ];

    public function pesertas()
    {
    	return $this->hasMany(Peserta::class);
    }
}
