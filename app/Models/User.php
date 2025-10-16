<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\send_tran;
use App\Models\transation;
use App\Models\game_key;

class User extends Authenticatable
{
  use HasRoles, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'role',
    'validation_code',
    'Yourname',
    'account_number',
    'phone_no',
    'email',
    'tax_phone_no',
    'akhama',
    'currency',
    'banknme',
    'balance',
    'password',
    'user_img',
  ];

  protected $table = 'user';

  public function transation()
  {
    return $this->hasMany(transation::class);
  }
  public function game_key()
  {
    return $this->hasMany(game_key::class);
  }
  public function send_tran()
  {
    return $this->hasMany(send_tran::class);
  }
}
