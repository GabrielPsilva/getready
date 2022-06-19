<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Celular;

class Orcamento extends Model
{
    use HasFactory;

    protected $table = 'orcamentos';

    public function celular()
    {
        //return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        return $this->hasOne(Celular::class, 'id', 'celular_id');
    }

}
