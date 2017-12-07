<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndexCover;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class IndexCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $indexCovers = IndexCover::orderBy('id', 'desc')->paginate(10);
        return view('manage.indexCover.index')->withIndexCovers($indexCovers);
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
        return view('manage.indexCover.create');
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

        if($request->hasFile('indexCover_image')){
            $indexCover_image = $request->file('indexCover_image');
            $filename = 'indexCover-'.time() . '.' . $indexCover_image->getClientOriginalExtension();
            Image::make($indexCover_image)->save( public_path('/uploads/' . $filename ) );
        }
        $indexCover = new IndexCover();
        $indexCover->indexCover = $filename;
        $indexCover->save();
        Session::flash('success', 'update');
        return redirect()->route('indexCover.show', $indexCover->id);
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
        $indexCover = IndexCover::where('id', $id)->with('roles')->first();
        return view("manage.indexCover.show")->withIndexCover($indexCover);
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
        $indexCover = IndexCover::where('id', $id)->with('roles')->first();
        return view("manage.indexCover.edit")->withIndexCover($indexCover)->withRoles($roles);
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
        $indexCover = IndexCover::findOrFail($id);
        if($request->hasFile('indexCover_image')){
            $indexCover_image = $request->file('indexCover_image');
            $filename = 'indexCovers-'.time() . '.' . $indexCover_image->getClientOriginalExtension();
            Image::make($indexCover_image)->save( public_path('/uploads/' . $filename ) );
            $indexCover->indexCover = $filename;
        }else{
            $indexCover->indexCover = $request->old_image;
        }

        $indexCover->save();
        Session::flash('success', '成功建立了 熱銷建案於資料庫內');
        return redirect()->route('indexCover.show', $indexCover->id);

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
        $indexCover = IndexCover::findOrFail($id);

        $indexCover->delete();
        Session::flash('success', '成功刪除了 '. $indexCover->id);
        return redirect()->route('indexCover.index');
    }
}
