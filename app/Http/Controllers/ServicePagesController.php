<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceInfo;
use DB;
use Image;

class ServicePagesController extends Controller
{
    public function contact()
    {
      $serviceInfos = ServiceInfo::orderBy('id', 'asc')->paginate(10);
      return view('service_pages/contact')->withServiceInfos($serviceInfos);
    }
}
