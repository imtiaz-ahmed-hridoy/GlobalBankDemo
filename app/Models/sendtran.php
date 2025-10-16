<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class sendtran extends Model
{
  use HasFactory;

  protected $fillable = ['user_id', 'username', 'useracc', 'transactionnum'];

  protected $table = 'sendtran';

  public function user()
  {
    return $this->belongsTo(user::class);
  }
}
