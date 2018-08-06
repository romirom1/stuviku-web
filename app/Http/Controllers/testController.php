<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class testController extends Controller
{
    
    public function index(){
    	$studio=App\Category::find(1)->services()->first()->id;
    	$studio1=App\Service::find($studio)->galeries;
    	return $studio1;
    }
}
