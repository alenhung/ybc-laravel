<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Image;
use App\ContactInfo;

class NewsPagesController extends Controller
{
    public function index()
    {
      $newss = News::orderBy('id', 'desc')->paginate(8);
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('news_pages/index')->withNewss($newss)->withContactInfo($contactInfo);
    }
    public function item($id)
    {
      $news = News::where('id', $id)->first();
      $contactInfo = ContactInfo::where('id',1)->first();
      return view("news_pages/item")->withNews($news)->withContactInfo($contactInfo);
    }
}
