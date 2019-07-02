<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
	use SoftDeletes;
 
    protected $dates = ['deleted_at'];
    
    protected $table    = "categorias";
    protected $fillable = [
        'nombre', 'descripcion', 'imagen',
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

}
