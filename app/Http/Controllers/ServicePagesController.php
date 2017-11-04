<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePagesController extends Controller
{
    public function contact()
    {
      return view('service_pages/contact');
    }
}
