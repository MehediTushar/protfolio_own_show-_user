<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $filetable=['institute_name','strat_date','end_date','gpa','paasing_year','institute_dep','district'];
}
