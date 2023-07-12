<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['balance'];

    public function transactions() {
        return $this->hasMany('App\Models\Transaction');
    }

    public function getBalanceAttribute() {
        $balance = $this->initial_deposit;
        foreach($this->transactions as $tr) {
            if($tr->deposit) {
                $balance += $tr->amount;
            }else {
                $balance -= $tr->amount;
            }
        }

        return number_format($balance,2);
    }

}
