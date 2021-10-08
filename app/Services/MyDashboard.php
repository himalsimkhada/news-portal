<?php

namespace App\Services;

use App\Models\Admin\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Pratiksh\Adminetic\Contracts\DashboardInterface;

class MyDashboard implements DashboardInterface
{
    public function view()
    {
        $post = Post::all();
        $totalViews = DB::table('views')->get()->count();
        $currentYearViews = DB::table('views')
            ->whereYear('viewed_at', date('Y'))
            ->get()
            ->count();
        $currentMonthViews = DB::table('views')
            ->whereMonth('viewed_at', date('m'))
            ->whereYear('viewed_at', date('Y'))
            ->get()
            ->count();
        $currentWeekViews = DB::table('views')
            ->whereBetween('viewed_at', [Carbon::now()
            ->startOfWeek(), Carbon::now()->endOfWeek()])
            ->whereYear('viewed_at', date('Y'))
            ->get()
            ->count();
        $todayViews = DB::table('views')
            ->where('viewed_at', Carbon::today())
            ->get()
            ->count();
        dd($todayViews);
        $post = Post::with('author', 'tags')->where('id', 1)->first();
        views($post)->record();
        $view = view()->exists('admin.dashboard.index') ? 'admin.dashboard.index' : 'adminetic::admin.dashboard.index';
        return view($view);
    }
}
