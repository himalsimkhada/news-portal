<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    public function pieChart(){
        $year = date('Y');
        $viewsArr = [];
        for($i=1; $i<=12; $i++){
            $viewsArr[] = DB::table('views')
            ->whereMonth('viewed_at', $i)
            ->whereYear('viewed_at', $year)
            ->get()
            ->count();
        }
        return response()->json($viewsArr);
    }
}
