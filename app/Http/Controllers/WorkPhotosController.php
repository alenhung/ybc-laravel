<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkPhotos;
use App\Work;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class WorkPhotosController extends Controller
{
    /**
     * Display a list of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        $works = Work::all();
        return view('manage.work_photos.create')->withWorks($works);
    }

    /**
     * Show the form for creat a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Role::all();
      $works = Work::all();
      return view('manage.work_photos.create')->withWorks($works);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request->all();
        $roles = Role::all();
        //
        if($request->hasFile('file')){
          foreach ($request->file as $file) {
            $filename = 'work-'.time().'.' . $file->getClientOriginalExtension();
            $worksPhotos = new WorkPhotos();
            $worksPhotos->work_id = $request->work_id;
            $worksPhotos->work_image = $filename;
            Image::make($file)->save( public_path('/uploads/' . $filename ) );
            $worksPhotos->save();
          }
          $count = count($request->file);
          Session::flash('success', 'Successfully created the new   role in the database.');
          return redirect()->route('work_photos.editDesc', $worksPhotos->work_id.'/'.$count);
        }
    }


    //
    public function editDesc($id, $count)
    {
        //
        $workPhotos = WorkPhotos::where('work_id', $id)->orderBy('id', 'desc')
                 ->take($count)->with('roles')->get();
        $works = Work::where('id', $id)->first();
        // return $workPhotos;
        return view("manage.work_photos.editDesc")->with('workPhotos', $workPhotos)->with('works',$works);
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
        $workPhotos = WorkPhotos::where('work_id', $id)->orderBy('id', 'desc')
                 ->take(10)->with('roles')->get();
        $works = Work::where('id', $id)->with('roles')->first();
        // return $workPhotos;
        return view("manage.work_photos.show")->with('workPhotos', $workPhotos)->with('works',$works);
    }
    /**
     * Show the form for edit the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
