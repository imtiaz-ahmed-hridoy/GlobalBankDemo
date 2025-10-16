<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class game_key extends Model
{
    use HasFactory;

     protected $fillable = [
      'user_id',
      'visually',
      'gamamount',
      'gamnum',

    ];

    protected $table = 'game_key';


   public function user()
  {
    return $this->belongsTo(user::class);
  }
}
