<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description',
    ];

// RELACIONES - RELATIONS
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

//ALMACENAMIENTO - STORAGE

//VALIDACIÓN - VALIDATION

//RECUPERACIÓN DE INFORMACIÓN - DATA RECOVERY

//OTRAS OPERACIONES - OTHER OPERATIONS
}
