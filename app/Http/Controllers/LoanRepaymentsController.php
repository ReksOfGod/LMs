<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loan_repayments;

class LoanRepaymentsController extends Controller
{
    public function create()
    {
        return view('Stock');
    }

    public function store(Request $request)
    {
        $loan_repayments = new loan_repayments([
    
            'outstandingAmount'=> $request->get('outstandingAmount'),
            'portfolioAtRisk'=> $request->get('portfolioAtRisk'),
            'amountInDefault'=> $request->get('amountInDefault'),
            'paymentDueDate'=> $request->get('paymentDueDate'),
          
        ]);
        $loan_repayments->save();

        return redirect('loan_repayments');
    }
    public function index()
    {
        return view('loan_repaymentsIndex');
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
