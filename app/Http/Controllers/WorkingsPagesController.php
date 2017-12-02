<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Working;
use DB;
use Image;
class WorkingsPagesController extends Controller
{
  public function index()
  {
    $workings = Working::orderBy('id', 'desc')->paginate(8);
    return view('workings_pages/index')->withWorkings($workings);
  }
  public function item($id)
  {
    $working = Working::where('id', $id)->first();
    return view("workings_pages/item")->withWorking($working);
  }
}
