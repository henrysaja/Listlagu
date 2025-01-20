<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'lagus';

    // Define the fillable attributes
    protected $fillable = [
        'nomor_lagu',
        'nama_lagu',
        'link_lagu',
    ];
}
