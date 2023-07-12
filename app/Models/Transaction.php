<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    const DEPOSIT = 1;
    const WITHDRAWAL = 0;

    protected $guarded = [];

    protected $appends = ['date'];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

    public function getDateAttribute() {
        return $this->created_at->format('F d, Y g:i A');
    }

}
