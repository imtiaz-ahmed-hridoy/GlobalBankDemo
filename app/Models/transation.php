<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class transation extends Model
{
    use HasFactory;


    protected $fillable = [
      'user_id',
      'receiver_account',
      'amount',
      'bank',

    ];

    protected $table = 'transation';


     public function user()
  {
    return $this->belongsTo(user::class);
  }
}
