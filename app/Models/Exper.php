<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exper extends Model
{
    use HasFactory;

    protected $filetable=['strat_date','end_date','designate','company_name','project_title','project_desc','experience','client'];
}
