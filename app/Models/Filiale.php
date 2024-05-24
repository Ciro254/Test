<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiale extends Model
{
    use HasFactory;
    
    protected $fillable = ['indirizzo', 'città', 'cap'];

    public function filiali()
    {
        return $this->hasMany(Automezzo::class, 'filiale_id', 'id');
    }
}
