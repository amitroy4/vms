<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_number',
        'identification',
        'identification_number',
        'purpose_of_visit',
        'host_name',
    ];
}
