<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeMaterials extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static $rules = [
        'name' => 'required'
    ];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

}
