<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUnidades extends Model
{
    protected $table = 'unidades';
    use HasFactory;


public function condominos(){
    return $this->hasMany('App\Models\ModelCondomino','id_unid', 'id_cond');
}




}
