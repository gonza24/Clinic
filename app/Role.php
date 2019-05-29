<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    // RELACIONES - RELATIONS
    public function permissions()
    {
        return $this->hasMany('App\Permission');
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
