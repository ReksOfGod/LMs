<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use jpmurray\LaravelCountdown\Countdown;

class StockController extends Controller
{
    public function create()
    {
        return view('Stock');
    }

    public function store(Request $request)
    {
        $stock = new Stock([
          'stockName' => $request->get('stockName'),
          'stockPrice' => $request->get('stockPrice'),
          'stockYear' => $request->get('stockYear'),
        ]);
        $stock->save();

        return redirect('stocks');
    }
    public function index()
    {
        return view('stockIndex');
    }

    public function samplePlot(){

        $data=array();

        $result = \DB::table('stocks')
                    ->where('stockName','=','Stephen' )
                    ->where('stockYear','=','2015')
                    ->orderBy('stockYear', 'ASC')
                    ->select('stockYear','stockPrice')
                    ->get();

        
        $data["stephenstock"]=$result;

        return view("welcome",$data);
    }

    public function chart()
      {
        $result = \DB::table('stocks')
                    ->where('stockName','=','Stephen')
                    ->orderBy('stockYear', 'ASC')
                    ->get();
                    
        return response()->json($result);
      }
}
