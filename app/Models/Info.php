<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $filetable=['designation','title','dob','email','phone','address','resume','image','gender','blood_group'];
}
