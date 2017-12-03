<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Image;

class NewsPagesController extends Controller
{
    public function index()
    {
      $newss = News::orderBy('id', 'desc')->paginate(8);
      return view('news_pages/index')->withNewss($newss);
    }
    public function item($id)
    {
      $news = News::where('id', $id)->first();
      return view("news_pages/item")->withNews($news);
    }
}
