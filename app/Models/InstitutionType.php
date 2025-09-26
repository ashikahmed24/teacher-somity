<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstitutionType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bn_name'];

    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}
