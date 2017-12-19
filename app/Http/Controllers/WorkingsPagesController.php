<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Working;
use DB;
use Image;
use App\ContactInfo;
class WorkingsPagesController extends Controller
{
  public function index()
  {
    $workings = Working::orderBy('id', 'desc')->paginate(8);
    $contactInfo = ContactInfo::where('id',1)->first();
    return view('workings_pages/index')->withWorkings($workings)->withContactInfo($contactInfo);
  }
  public function item($id)
  {
    $working = Working::where('id', $id)->first();
    $contactInfo = ContactInfo::where('id',1)->first();
    return view("workings_pages/item")->withWorking($working)->withContactInfo($contactInfo);
  }
}
