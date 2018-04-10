<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\income_and_expenditure;

class IncomeAndExpenditureController extends Controller
{
    public function create()
    {
        return view('Stock');
    }

    public function store(Request $request)
    {
        $income_and_expenditure= new income_and_expenditure([
            
            'monthlyConsolidatedPay'=> $request->get('monthlyConsolidatedPay'),
            'otherIncome'=> $request->get('otherIncome'),
            'monthlyExpenditure'=> $request->get('monthlyExpenditure'),
            'otherMonthlyloanRepayments'=> $request->get('otherMonthlyloanRepayments'),
          
        ]);
        $income_and_expenditure->save();

        return redirect('stocks');
    }
    public function index()
    {
        return view('income_and_expenditureIndex');
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
