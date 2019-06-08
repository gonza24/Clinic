<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description','role_id',
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
    public function store($request)
    {
        $slug = str_slug($request->name,'-');
        alert('Exito','El permiso se ha creado', 'success')->showConfirmButton();
        return self::create($request->all() + [
            'slug' => $slug,
            ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name);
        return self::update($request->all() + [
            'slug' => $slug
        ]);
        alert('Exito', 'El permiso se ha actualizado', 'success')->showConfirmButton();
    }
//VALIDACIÓN - VALIDATION

//RECUPERACIÓN DE INFORMACIÓN - DATA RECOVERY

//OTRAS OPERACIONES - OTHER OPERATIONS
}
