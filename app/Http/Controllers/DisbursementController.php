<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\disbursement;

class DisbursementController extends Controller
{
    public function create()
    {
        return view('disbursement');
    }

    public function store(Request $request)
    {
        $disbursement= new disbursement([
            'amount'=> $request->get('amount'),
          
        ]);
        $disbursement->save();

        return redirect('disbursements');
    }
    public function index()
    {
        return view('disbursementIndex');
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
