<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Collectible;
use App\Models\User;
use App\Models\Collection;
use Auth;

class ReportController extends Controller
{

    public function report(Request $request){
    	$data = new Report;
        $data->user_id = $request->user_id;
        $data->owner = $request->owner;
        $data->contract = $request->contract;
        $data->token_id = $request->token_id;
        $data->message = $request->message;
        $data->save();
        return true;
    }
}
