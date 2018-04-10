<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guarantor;

class GuarantorController extends Controller
{
    public function create()
    {
        return view('Stock');
    }

    public function store(Request $request)
    {
        $guarantor = new guarantor([
            
            'fname'=> $request->get('fname'),
            'lname'=> $request->get('lname'),
            'homePhoneNumber'=> $request->get('homePhoneNumber'),
            'mobilePhoneNumber'=> $request->get('mobilePhoneNumber'),
         
        ]);
        $guarantor->save();

        return redirect('stocks');
    }
    public function index()
    {
        return view('guarantorIndex');
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
