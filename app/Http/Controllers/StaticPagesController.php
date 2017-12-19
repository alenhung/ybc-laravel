<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\IndexInfo;
use App\IndexCover;
use App\ContactInfo;
use DB;
use Image;

class StaticPagesController extends Controller
{
    public function index()
    {
      $indexInfos = IndexInfo::orderBy('id', 'asc')->paginate(8);
      $indexCover = IndexCover::where('id', 1)->first();
      $works = Work::orderBy('id', 'desc')->paginate(8);
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('static_pages/index')->withWorks($works)->withIndexInfos($indexInfos)->withIndexCover($indexCover)->withContactInfo($contactInfo);
    }
    public function jobs(){
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('static_pages/jobs')->withContactInfo($contactInfo);
    }
    public function redevelopment(){
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('static_pages/redevelopment')->withContactInfo($contactInfo);
    }
    public function redevelopmenting(){
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('static_pages/redevelopmenting')->withContactInfo($contactInfo);
    }
    public function affiliated(){
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('static_pages/affiliated')->withContactInfo($contactInfo);
    }
    public function sendMail(Request $request){
      
      $adminUser = 'alenhung@gmail.com';
      Mail::to($adminUser)->send(new ContactForm($request));//未完成
    }
}
