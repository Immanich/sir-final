<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;


class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'date_time', 'account_id'];

    public function account() {
        return $this->belongsTo(Account::class);
    }
}
