<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'alias',
        'place_of_birth',
        'date_of_birth' ,
        'age',
        'civil_status',
        'gender',
        'purok',
        'voter_status',
        'vaccination_status',
        'email',
        'password',
        'contact_number',
        'occupation',
        'address',
        'government_id_number',
        'citizenship',
    ];
}
