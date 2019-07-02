<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
	use SoftDeletes;
 
    protected $dates = ['deleted_at'];
    
    protected $table    = "productos";
    protected $fillable = [
        'nombre', 'precio', 'descripcion', 'categoria_id',
    ];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }

}
