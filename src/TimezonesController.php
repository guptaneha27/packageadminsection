<?php
namespace Lararavelnewpackage\Timezones;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class TimezonesController extends Controller
{
 
    public function index($timezone)
    {   
    	//print_r("helo");
        //echo Carbon::now($timezone)->toDateTimeString();
        return view('helo::welcome');
    }
 
}