<?php

namespace App\Http\Controllers\authentications;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB};
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\{Permission, Role};

class LoginBasic extends Controller
{
  public function index()
  {

    //create role & permission
//
    // $user =User::where('role', 1)->first();
    //  $user->assignRole('admin');
    // $user->givePermissionTo('edit');

    // Give role to permission

    // $role = Role::where('name', 'admin')->first();

    // $role->givePermissionTo('edit');

    //role & permission end

    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  }

  // Import your User model at the beginning of the file

  public function login(Request $request)
  {
    $credentials = $request->only('phone_no', 'password');

    $user = User::where('phone_no', $credentials['phone_no'])
      ->where('password', $credentials['password'])
      ->first();

    if ($user) {
      if ($user->role == 0) {
        Auth::login($user);
        return redirect()->route('user_admin');
      } elseif ($user->role == 1) {
        Auth::login($user);
        return redirect()->route('admin_dashboard');
      }
    }

    return redirect()->back()->with('error', 'Invalid credentials');
  }

  public function logout()
  {
    Auth::logout();
    return redirect()->route('home');
  }


  public function register()
  {

    return view('content.authentications.auth-register-basic');
  }
}
