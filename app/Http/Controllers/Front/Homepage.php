<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class Homepage extends Controller
{
  public function index(){
    $data['categories']=Category::orderBy('name','ASC')->get();
    return view('front.homepage', $data);
  }
}
