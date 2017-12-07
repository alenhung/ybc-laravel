<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndexInfo;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class IndexInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $indexInfos = IndexInfo::orderBy('id', 'asc')->paginate(10);
        // return $indexInfos->all();
        return view('manage.index_info.index')->withIndexInfos($indexInfos);
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
        return view('manage.index_info.create');
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
        $roles = Role::all();
        $this->validate($request, [
          'title'    =>  'required|max:255',
          'slogan'   =>  'required|max:255',
          'page_url' =>  'required|max:255',

        ]);
        $indexInfo = new IndexInfo();
        if($request->hasFile('info_image')){
            $info_image = $request->file('info_image');
            $filename = 'index_info'.time() . '.' . $info_image->getClientOriginalExtension();
            Image::make($info_image)->save( public_path('/uploads/' . $filename ) );
            $indexInfo->image = $filename;
        }
        $indexInfo->title = $request->title;
        $indexInfo->slogan = $request->slogan;
        $indexInfo->page_url = $request->page_url;
        $indexInfo->save();
        Session::flash('success', 'Successfully created the new '. $indexInfo->title . ' role in the database.');
        return redirect()->route('index_info.show', $indexInfo->id);
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
        $indexInfo = IndexInfo::where('id', $id)->with('roles')->first();
        return view("manage.index_info.show")->withIndexInfo($indexInfo);
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
        $indexInfo = IndexInfo::where('id', $id)->with('roles')->first();
        return view("manage.index_info.edit")->withIndexInfo($indexInfo)->withRoles($roles);
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
        $this->validate($request, [
          'title'    =>  'required|max:255',
          'slogan'   =>  'required|max:255',
          'page_url' =>  'required|max:255',
        ]);
        $indexInfo = IndexInfo::findOrFail($id);
        if($request->hasFile('info_image')){
            $info_image = $request->file('info_image');
            $filename = 'index_info'.time() . '.' . $info_image->getClientOriginalExtension();
            Image::make($info_image)->save( public_path('/uploads/' . $filename ) );
            $indexInfo->image = $filename;
        }else{
            $indexInfo->image = $request->old_image;
        }

        $indexInfo->title = $request->title;
        $indexInfo->slogan = $request->slogan;
        $indexInfo->page_url = $request->page_url;

        $indexInfo->save();
        Session::flash('success', '成功更新了 '. $indexInfo->title . ' 首頁資訊於資料庫內');
        return redirect()->route('index_info.show', $indexInfo->id);
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
        $indexInfo = IndexInfo::findOrFail($id);
        $indexInfo->delete();
        Session::flash('success', '成功刪除了 '. $indexInfo->title);
        return redirect()->route('index_info.index');
    }
}
