<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bank_accounts;

class BankAccountsController extends Controller
{
    public function create()
    {
        return view('Stock');
    }

    public function store(Request $request)
    {
        $bank_accounts = new bank_accounts([
            'accountName/title'=> $request->get('accountName/title'),
            'bankBranch'=> $request->get('bankBranch'),
            'bankName'=> $request->get('bankName'),
         
        ]);
        $bank_accounts->save();

        return redirect('stocks');
    }
    public function index()
    {
        return view('bank_accountsIndex');
    }

    public function chart()
      {
        $result = \DB::table('stocks')
                    ->where('stockName','=','Infosys')
                    ->orderBy('stockYear', 'ASC')
                    ->get();
        return response()->json($result);
      }
}
