<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automezzo extends Model
{
    use HasFactory;

    protected $fillable = ['targa', 'marca', 'modello', 'filiale_id'];

    public function filiale()
    {
        return $this->belongsTo(Filiale::class, 'filiale_id', 'codice');
    }
}
