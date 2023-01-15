<?php

namespace Modules\ERP\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workman extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'is_archived'];
    
}
