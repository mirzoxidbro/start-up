<?php

namespace Modules\ERP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ERP\Entities\Wallet;

class WalletController extends Controller
{
    public function index()
    {
        return Wallet::query()->with('user')->get();
    }

    public function store(Request $request)
    {
        $wallet = new Wallet();
        $wallet->user_id = $request->user_id;
        $wallet->amount = 0;
        $wallet->save();

        return $wallet;
    }

    public function delete($id)
    {
        Wallet::findOrFail($id)->delete();
    }
}
