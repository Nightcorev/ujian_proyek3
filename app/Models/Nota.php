<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'nota';
    protected $primaryKey = 'KodeNota';
    public $incrementing = false; 
    public $timestamps = false;
    protected $fillable = [
        'TglNota',
        'JamNota',
        'JumlahBelanja',
        'Diskon',
        'Total',
    ];
    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'KodeKasir', 'KodeKasir');
    }

    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'KodeTenan', 'KodeTenan');
    }
}
