<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicants extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobtitle',
        'DOA',
        'email',
        'address',
        'name',
        'tp_no',
        'NIC',
        'cv_id'
    ];
}
