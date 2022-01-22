<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCondomino extends Model
{
    protected $table = 'condominio';
    use HasFactory;

    public function unidades(){
        return $this->hasMany('App\Models\ModelUnidades','id_cond','id_unid');
    }

    
}
