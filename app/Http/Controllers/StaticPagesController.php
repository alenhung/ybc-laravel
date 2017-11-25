<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use DB;
use Image;

class StaticPagesController extends Controller
{
    public function index()
    {
      $works = Work::orderBy('id', 'desc')->paginate(8);
      return view('static_pages/index')->withWorks($works);
    }
    public function about()
    {
      return view('static_pages/about');
    }
}
