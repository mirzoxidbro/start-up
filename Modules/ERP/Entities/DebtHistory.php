<?php

namespace Modules\ERP\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DebtHistory extends Model
{
    use HasFactory;

    protected $fillable = ['workman_id', 'transaction_id', 'amount', 'description'];
    
    public function workman()
    {
        return $this->belongsTo(Workman::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}