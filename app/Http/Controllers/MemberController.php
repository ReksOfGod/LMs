<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;

class MemberController extends Controller
{
    public function create()
    {
        return view('member');
    }

    public function store(Request $request)
    {
        $member= new member([
          'fname' => $request->get('fname'),
          'lname' => $request->get('lname'),
          'dateOfBirth' => $request->get('dateOfBirth'),
          'homePhoneNumber'=> $request->get('homePhoneNumber'),
          'mobilePhoneNumber'=> $request->get('mobilePhoneNumber'),
          'employmentStatus'=> $request->get('employmentStatus'),
          'postionHeld'=> $request->get('postionHeld'),
          'contractEnd'=> $request->get('contractEnd'),
        ]);
        $member->save();

        return redirect('members');
    }
    public function index()
    {
        return view('memberIndex');
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
