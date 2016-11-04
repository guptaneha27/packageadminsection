<?php
namespace Laraveldaily\Timezones;
 
use App\Http\Controllers\Controller; 

class MyController extends Controller
{
 
    public function index()
    {   
    	//print_r("helo");
        //echo Carbon::now($timezone)->toDateTimeString();
        return view('helo::welcome');
    }
 
}