<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use DB;
use Image;
class WorksPagesController extends Controller
{
  public function index()
  {
    $works = Work::orderBy('id', 'desc')->paginate(8);
    return view('works_pages/index')->withWorks($works);
  }
  public function item($id)
  {
    $work = Work::where('id', $id)->first();
    return view("works_pages/item")->withWork($work);
  }
}
