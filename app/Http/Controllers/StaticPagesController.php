<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\IndexInfo;
use App\IndexCover;
use DB;
use Image;

class StaticPagesController extends Controller
{
    public function index()
    {
      $indexInfos = IndexInfo::orderBy('id', 'asc')->paginate(8);
      $indexCover = IndexCover::where('id', 1)->first();
      $works = Work::orderBy('id', 'desc')->paginate(8);
      return view('static_pages/index')->withWorks($works)->withIndexInfos($indexInfos)->withIndexCover($indexCover);
    }
    public function jobs(){
      return view('static_pages/jobs');
    }
    public function redevelopment(){
      return view('static_pages/redevelopment');
    }
    public function redevelopmenting(){
      return view('static_pages/redevelopmenting');
    }
    public function affiliated(){
      return view('static_pages/affiliated');
    }

}
