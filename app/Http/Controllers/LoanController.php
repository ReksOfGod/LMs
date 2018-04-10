<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loan;


class LoanController extends Controller
{
    public function create()
    {
        return view('Stock');
    }

    public function store(Request $request)
    {
        $loan = new loan([
            'amount'=> $request->get('amount'),
            'loantype'=> $request->get('loantype'),
            'processCharge'=> $request->get('processCharge'),
            'interestRate'=> $request->get('interestRate'),
            'monthlyInstallments'=> $request->get('monthlyInstallments'),
            'monthlyPayments'=> $request->get('monthlyPayments'),
            'insuranceCharge'=> $request->get('insuranceCharge'),
            'shareContribution'=> $request->get('shareContribution'),
          
        ]);
        $loan->save();

        return redirect('stocks');
    }
    public function index()
    {
        return view('loanIndex');
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
