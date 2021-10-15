<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $main_slider = Activity::latest()->limit(1)->get();        
        $slider = Activity::latest()->skip(1)->limit(2)->get();
        $last_slider = Activity::latest()->skip(3)->limit(2)->get();
        $activities = Activity::paginate(5);
        $partner = Partner::latest()->limit(4)->get();
        $partners = Partner::latest()->skip(4)->limit(4)->get();
        $part = Partner::get();
        
     
        return view('index' , [
            'activities' => $activities , 
            'main_slider' => $main_slider , 
            'slider' => $slider , 
            'last_slider' => $last_slider , 
            'partner' => $partner , 
            'partners' => $partners , 
            'part' => $part , 
          
        ]);
    }
}
