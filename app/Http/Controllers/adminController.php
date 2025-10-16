<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeRequest;
use App\Http\Requests\updateRequest;
use App\Http\Requests\game_req;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\game_key;
use App\Models\sendtran;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //create role & permission

    // $user =User::where('role', 1)->first();
    // $user->assignRole('admin');
    // $user->givePermissionTo('edit');

    // Give role to permission

    // $role = Role::where('name', 'admin')->first();

    // $role->givePermissionTo('edit');

    //role & permission end

    return view('content.pages.admin');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */

  public function create_play_game($id)
  {
    $user_edit = DB::table('user')
      ->where('role', '=', 0)
      ->find($id);
    return view('content.pages.admin_create_play_game', compact('user_edit'));
  }

  public function create_play_game_key(game_req $game_req, $id)
  {
    if (!Auth::check()) {
      return redirect()
        ->route('/')
        ->with('error', 'You\'re not authenticated!');
    }

    $user = User::find($id);

    if (!$user) {
      return redirect()
        ->back()
        ->with('error', 'User not found!');
    }
    // Check if the user has enough balance
    if ($user->balance < $game_req->gamamount) {
      return redirect()
        ->back()
        ->with('error', 'Insufficient balance!');
    }
    // Subtract the gamamount from the user's balance
    $user->balance -= $game_req->gamamount;

    // Save the updated user balance
    $user->save();

    $game_req->validated();

    $data = [
      'user_id' => $user->id,
      'gamnum' => $game_req->gamnum,
      'visually' => $game_req->visually,
      'gamamount' => $game_req->gamamount,
    ];

    game_key::create($data);
    return redirect()
      ->back()
      ->with('success', 'Data save successfully ');
  }

  public function update_play_game($id)
  {
    $user_edit = DB::table('user')
      ->where('role', '=', 0)
      ->find($id);
    $game_key = game_key::where('user_id', $id)
      ->orderBy('id', 'desc')
      ->latest()
      ->first();
    return view('content.pages.admin_update_play_game', compact('user_edit', 'game_key'));
  }

  public function update_play_game_key(game_req $game_req, $id)
  {
    if (!Auth::check()) {
      return redirect()
        ->route('home')
        ->with('error', 'You\'re not authenticated!');
    }

    $game_req->validated();

    $game_key = game_key::where('user_id', $id)
      ->orderBy('id', 'desc')
      ->latest()
      ->first();

    if (!$game_key) {
      return redirect()
        ->back()
        ->with('error', 'user not found!');
    }

    $game_key->update([
      'gamnum' => $game_req->gamnum,
      'visually' => $game_req->visually,
      'gamamount' => $game_req->gamamount,
    ]);

    return redirect()
      ->back()
      ->with('success', 'Game updated successfully.');
  }

  public function get_transaction()
  {
    $usertr = sendtran::simplePaginate(10);

    return view('content.pages.admin_get_recipt', compact('usertr'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */
  public function list(User $User)
  {
    $user_details = User::where('role', 0)->paginate(10);
    return view('content.pages.admin_user_list', compact('user_details'));
  }

  /*admin input customer*/

  public function admin_user_apply(storeRequest $request)
  {
    $request->validated();

    //background image

    //background image file name
    $user_img_name = time() . Str::upper(Str::random(16)) . '.' . $request->user_img->extension();
    // move the background image
    $request->user_img->move(public_path('user_img'), $user_img_name);

    $data = [
      'Yourname' => $request->Yourname,
      'account_number' => $request->account_number,
      'phone_no' => $request->phone_no,
      'email' => $request->email,
      'tax_phone_no'=>$request->tax_phone_no,
      'akhama' => $request->akhama,
      'banknme' => $request->banknme,
      'currency' => $request->currency,
      'balance' => $request->balance,
      'password' => $request->password,
      'validation_code' => $request->validation_code,
      'user_img' => $user_img_name,
    ];

    User::create($data);

    return redirect()
      ->back()
      ->with('success', 'Data save successfully ');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $User
   * @return \Illuminate\Http\Response
   */
  public function useredit(User $User, $id)
  {
    $user_edit = DB::table('user')
      ->where('role', '=', 0)
      ->find($id);
    //   // Store user data in session
    // session(['user_edit' => $user_edit]);
    return view('content.pages.admin_user_edit', compact('user_edit'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\updateRequest  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function userupdate(updateRequest $request, User $User, $id)
  {
    if (!Auth::check()) {
      return redirect()
        ->route('/')
        ->with('error', 'You\'re not authenticated!');
    }

    $request->validated();

    $get_data = User::where('role', 0)->findOrFail($id);

    $image_path = $get_data->user_img;

    //for testimonial image

    if ($request->hasFile('user_img')) {
      if (File::exists(public_path('user_img/') . $image_path)) {
        File::delete(public_path('user_img/') . $image_path);
      }
      //background image file name
      $user_img_name = time() . Str::upper(Str::random(16)) . '.' . $request->user_img->extension();
      // move the background image
      $request->user_img->move(public_path('user_img'), $user_img_name);
    } else {
      $user_img_name = $get_data->user_img;
    }

    $data = [
      'Yourname' => $request->Yourname,
      'account_number' => $request->account_number,
      'phone_no' => $request->phone_no,
      'akhama' => $request->akhama,
      'balance' => $request->balance,
      'password' => $request->password,
      'validation_code' => $request->validation_code,
      'user_img' => $user_img_name,
    ];

    User::where('role', 0)
      ->findOrFail($id)
      ->update($data);

    return redirect()
      ->back()
      ->with('success', 'Data update successfully ');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    if (Auth::check()) {
      try {
        $user = User::findOrFail($id);

        // remove file from storage
        $image_path = $user->user_img;

        if (File::exists(public_path('user_img/') . $image_path)) {
          File::delete(public_path('user_img/') . $image_path);
        } else {
          return redirect()
            ->back()
            ->with('session', 'Images are not found associated with this user!');
        }

        $user->delete();

        return redirect()
          ->back()
          ->with('session', 'User and associated images deleted successfully!');
      } catch (\Exception $e) {
        return redirect()
          ->back()
          ->with('session', 'An error occurred while deleting the user!');
      }
    } else {
      return redirect()
        ->route('/')
        ->with('session', 'You are not authenticated!');
    }
  }
}
