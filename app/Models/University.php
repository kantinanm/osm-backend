<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'univ_id', 'univ_name_th', 'univ_name_eng', 'univ_master', 'province_id', 'univ_type_name', 'univ_group_name', 'univ_group_id', 'institute_type_id', 'institute_type_name',
    ];

    protected $primaryKey = '_id';
}
