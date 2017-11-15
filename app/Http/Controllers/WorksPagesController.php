<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksPagesController extends Controller
{

  public function index()
  {
    return view('works_pages/index');
  }
  public function item()
  {
    return view('works_pages/item');
  }
}
