<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amphoe extends Model
{
    use HasFactory;

    protected $fillable = [
        'gid', 'ap_code', 'ap_tn', 'ap_en', 'pv_code', 'pv_tn', 'pv_en', 're_nesdb', 're_royin', 'areashape', 'admin_type', 'geom'
    ];

    protected $primaryKey = 'id';

            /* 
            gid  int
            id   num
            ap_code   string 4
            ap_tn     string 60
            ap_en     string 50
            pv_code   string 2
            pv_tn     string 50
            pv_en     string 50
            re_nesdb  string 50
            re_royin  string 50
            areashape double 
            admin_type  smallint
            geom  geometry
            */

}
