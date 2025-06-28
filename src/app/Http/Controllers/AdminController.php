<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;

class AdminController extends Controller
{

    public function create(Request $request){
        $weight = $request->only(['weight','date']);
        $weight['date'] = $request->input('date', date('Y-m-d'));
        $target = $request->only(['target_weight']);
        
        WeightTarget::create(array_merge(['user_id' => Auth::id()], $target));
        WeightLog::create(array_merge(['user_id' => Auth::id()], $weight));
    
        return redirect('/weight_logs');
    }
    

    public function logs(Request $request){
        $weight = $request->only(['weight']);
        $target = $request->only(['target_weight']);
        WeightTarget::create(array_merge(['user_id' => Auth::id()], $target));
        WeightLog::create(array_merge(['user_id' => Auth::id()], $weight));

        return redirect('/weight_logs');
    }


    public function top(){
        $weighttarget = WeightTarget::first();
        $weightlogs = WeightLog::all();
        return view('weight_logs',['weighttarget' => $weighttarget,'weightlogs'=> $weightlogs]);
    }

    public function goal(){
        $goal =WeightTarget::first();
        return view('goal',compact('goal'));
    }

    public function edit(Request $request){
        $weighttarget = WeightTarget::find($request->id);
        return view('goal_setting',['weighttarget' => $weighttarget]);
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        WeightTarget::find($request->target_weight)->update($form);
        return redirect('/weight_logs');
    }

    public function log(){
        return view('log');
    }
}
