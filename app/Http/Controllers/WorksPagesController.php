<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use DB;
use Image;
use App\ContactInfo;
class WorksPagesController extends Controller
{
  public function index()
  {
    $works = Work::orderBy('id', 'desc')->paginate(8);
    $contactInfo = ContactInfo::where('id',1)->first();
    return view('works_pages/index')->withWorks($works)->withContactInfo($contactInfo);
  }
  public function all()
  {
    $works = Work::where('status','!=' ,'hide')->where('status','!=' ,'working')->orderBy('id', 'desc')->paginate(8);
    $contactInfo = ContactInfo::where('id',1)->first();
    return view('works_pages/index')->withWorks($works)->withContactInfo($contactInfo);
  }
  public function onSale()
  {
    $works = Work::where('status', 'onSale')->orderBy('id', 'desc')->paginate(8);
    $contactInfo = ContactInfo::where('id',1)->first();
    return view('works_pages/works')->withWorks($works)->withContactInfo($contactInfo);
  }
  public function saleOut()
  {
    $works = Work::where('status', 'saleOut')->orderBy('id', 'desc')->paginate(8);
    $contactInfo = ContactInfo::where('id',1)->first();
    return view('works_pages/works')->withWorks($works)->withContactInfo($contactInfo);
  }
  public function workings()
  {
    $works = Work::where('status', 'working')->orderBy('id', 'desc')->paginate(8);
    $contactInfo = ContactInfo::where('id',1)->first();
    return view('works_pages/works')->withWorks($works)->withContactInfo($contactInfo);
  }
  public function item($id)
  {
    $work = Work::where('id', $id)->first();
    $contactInfo = ContactInfo::where('id',1)->first();
    return view("works_pages/item")->withWork($work)->withContactInfo($contactInfo);
  }
}
