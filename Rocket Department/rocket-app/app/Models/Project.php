<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'pname',
        'pdate',
        'noOfLaunch',
        'noOfLand',
        'noOfReflight',
        'fcost',
        'ecost',
        'fucost',
        'oxcost',
        'pcost',
        'ncost',
        'ocost'
    ]; 

}
