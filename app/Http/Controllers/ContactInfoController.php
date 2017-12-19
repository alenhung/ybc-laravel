<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class ContactInfoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $contactInfos = ContactInfo::orderBy('id', 'desc')->paginate(10);
      return view('manage.contactInfo.index')->withContactInfos($contactInfos);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      $roles = Role::all();
      return view('manage.contactInfo.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
      //
      $roles = Role::all();
      $contactInfo = new ContactInfo();
      $contactInfo->name = $request->name;
      $contactInfo->tel = $request->tel;
      $contactInfo->fax = $request->fax;
      $contactInfo->address = $request->address;
      $contactInfo->e_address = $request->e_address;
      $contactInfo->email = $request->email;
      $contactInfo->save();
      Session::flash('success', 'update');
      return redirect()->route('contactInfo.show', $contactInfo->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
      $contactInfo = ContactInfo::where('id', $id)->with('roles')->first();

      return view("manage.contactInfo.show")->withContactInfo($contactInfo);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $roles = Role::all();
      $contactInfo = ContactInfo::where('id', $id)->with('roles')->first();
      return view("manage.contactInfo.edit")->withContactInfo($contactInfo)->withRoles($roles);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $roles = Role::all();
      $contactInfo = ContactInfo::findOrFail($id);
      $contactInfo->name = $request->name;
      $contactInfo->tel = $request->tel;
      $contactInfo->fax = $request->fax;
      $contactInfo->address = $request->address;
      $contactInfo->e_address = $request->e_address;
      $contactInfo->email = $request->email;
      $contactInfo->save();
      Session::flash('success', '成功建立了 熱銷建案於資料庫內');
      return redirect()->route('contactInfo.show', $contactInfo->id);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $contactInfo = ContactInfo::findOrFail($id);

      $contactInfo->delete();
      Session::flash('success', '成功刪除了 '. $contactInfo->id);
      return redirect()->route('contactInfo.index');
  }
}
