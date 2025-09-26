<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'upazila_id',
        'institution_type_id',
        'name',
        'bn_name',
        'eiin',
        'address',
        'lat',
        'lon',
        'established_year',
        'website'
    ];

    public function upazila()
    {
        return $this->belongsTo(Upazila::class);
    }

    public function type()
    {
        return $this->belongsTo(InstitutionType::class, 'institution_type_id');
    }
}
