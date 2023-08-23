<?php

namespace App\Http\Controllers;

use App\Models\Getquote;
use Illuminate\Http\Request;

class GetQuoteController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data=new Getquote;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->Features_required=$request->FeaturesRequired;
    $data->	Budget_range=$request->BudgetRange;
    $data->Message=$request->Message;
    $data->save();
    $request->session()->flash('centerSuccess', 'User detail has been submitted successfully!');

    return redirect()->back();
     }
     
}
