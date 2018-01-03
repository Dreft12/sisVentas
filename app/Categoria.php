<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table="Categoria";

    protected $primaryKey="idCategoria";

    protected $timestamps=false;

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Condicion'
    ];
}
