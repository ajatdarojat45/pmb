<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
    	'code', 'name', 'description', 'date', 'locate', 'price', 'quota',
    ];

    public function pesertas()
    {
    	return $this->hasMany(Peserta::class);
    }
}
