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
    public function store($request)
    {
        $slug = str_slug($request->name, '-');
        alert( 'Éxito', 'El rol se ha guardado', 'success')->showConfirmButton();

        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name, '-');
        self::update($request->all() + [
            'slug' => $slug
        ]);
        alert( 'Éxito', 'El rol se ha actualizado', 'success')->showConfirmButton();
    }

    //VALIDACIÓN - VALIDATION

    //RECUPERACIÓN DE INFORMACIÓN - DATA RECOVERY

    //OTRAS OPERACIONES - OTHER OPERATIONS
}
