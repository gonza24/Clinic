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
        toast('Rol guardado','success','top-right');

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
    }

    //VALIDACIÓN - VALIDATION

    //RECUPERACIÓN DE INFORMACIÓN - DATA RECOVERY

    //OTRAS OPERACIONES - OTHER OPERATIONS
}
