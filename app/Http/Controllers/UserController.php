<?php

namespace App\Http\Controllers;

use App\Http\Requests\transation;
use App\Http\Requests\sendtran;
use App\Models\transation as ModelsTransation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\game_key;
use App\Models\sendtran as SendTr;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function transation(transation $request)
  {
    if (!Auth::check()) {
      return redirect()
        ->route('/')
        ->with('error', 'You\'re not authenticated!');
    }

    $request->validated();

    $sender = auth()->user();
    $receiverAccount = $request->input('receiver_account');
    $amount = $request->input('amount');
    $bank = $request->input('bank');

    // Check if sender has sufficient balance
    if ($sender->balance < $amount) {
      return redirect()
        ->back()
        ->with('error', 'Insufficient balance');
    }

    // Start database transaction
    // DB::beginTransaction();

    // try {
    //   // Deduct amount from sender
    //   $sender->balance -= $amount;
    //   $sender->save();

    //   // Record transaction
    //   $data = [
    //     'user_id' => $sender->id,
    //     'receiver_account' => $receiverAccount,
    //     'bank' => $bank,
    //     'amount' => $amount,
    //   ];
    //   ModelsTransation::create($data);
    //   // Commit transaction
    //   DB::commit();

    //   return redirect()
    //     ->back()
    //     ->with('success', 'Transfer successful');
    // } catch (\Exception $e) {
    //   // Rollback transaction on error
    //   DB::rollBack();
    //   return redirect()
    //     ->back()
    //     ->with('error', 'Transfer unsuccessful!');
    // }

    try {
      // Laravel handles rollback automatically if anything fails
      DB::transaction(function () use ($sender, $amount, $receiverAccount, $bank) {
        $sender->decrement('balance', $amount); // Safe atomic balance deduction

        ModelsTransation::create([
          'user_id' => $sender->id,
          'receiver_account' => $receiverAccount,
          'bank' => $bank,
          'amount' => $amount,
        ]);
      });

      return redirect()
        ->back()
        ->with('success', 'Transfer successful');
    } catch (\Exception $e) {
      return redirect()
        ->back()
        ->with('error', 'Transfer unsuccessful!');
    }
  }

  public function banklist()
  {
    // Retrieve the authenticated user instance
    $client_data = Auth::user();

    // Query additional data based on the user's ID
    // $user_data = User::where('id', $client_data->id)->first();

    return view('content.pages.banklist', compact('client_data'));
  }

  public function cashout()
  {
    // Retrieve the authenticated user instance
    $client_data = Auth::user();

    // Query additional data based on the user's ID
    // $user_data = User::where('id', $client_data->id)->first();

    return view('content.pages.cashout', compact('client_data'));
  }

  public function index()
  {
    // Retrieve the authenticated user instance
    $client_data = Auth::user();

    // Query additional data based on the user's ID
    // $user_data = User::where('id', $client_data->id)->first();

    return view('content.pages.useradmin', compact('client_data'));
  }

  public function verifycode()
  {
    // Retrieve the authenticated user instance
    $client_data = Auth::user();

    // Query additional data based on the user's ID
    // $user_data = User::where('id', $client_data->id)->first();

    return view('content.pages.banklist', compact('client_data'));
    return view('content.pages.cashout', compact('client_data'));
  }

  public function userinfo()
  {
    $client_data = Auth::user();
    return view('content.pages.userinfo', compact('client_data'));
  }
  public function play_Game(game_key $game_key)
  {
    $game_details = game_key::where('user_id', Auth::user()->id)->paginate(10);
    return view('content.pages.userplaygame', compact('game_details'));
  }
  public function send_transaction()
  {
    return view('content.pages.usersendrecipt');
  }
  public function send_transaction_key(sendtran $sendtran)
  {
    if (!Auth::check()) {
      return redirect()
        ->route('/')
        ->with('error', 'You\'re not authenticated!');
    }

    $sendtran->validated();

    SendTr::create([
      'user_id' => auth()->user()->id,
      'username' => auth()->user()->Yourname,
      'useracc' => auth()->user()->account_number,
      'transactionnum' => $sendtran->transactionnum,
    ]);

    return redirect()
      ->back()
      ->with('success', 'Transaction Number Send Successfully.');
  }
}
