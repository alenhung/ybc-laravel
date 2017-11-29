<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkingPhotos;
use App\Working;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class WorkingPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Role::all();
      $workings = Working::all();
      return view('manage.working_photos.create')->withWorkings($workings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = Role::all();
        //
        if($request->hasFile('file')){

          foreach ($request->file as $file) {

            $filename = time().str_random(10) . '.' . $file->getClientOriginalExtension();


            $workingsPhotos = new WorkingPhotos();
            $workingsPhotos->working_id = $request->working_id;
            $workingsPhotos->working_images = $filename;
            Image::make($file)->save( public_path('/uploads/' . $filename ) );
            $workingsPhotos->save();
          }
          Session::flash('success', 'Successfully created the new   role in the database.');
          return redirect()->route('working_photos.show', $workingsPhotos->working_id);
        }
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
        $workingPhotos = WorkingPhotos::where('working_id', $id)->orderBy('id', 'desc')
                 ->take(10)->with('roles')->get();
        $workings = Working::where('id', $id)->first();
        // return $workingPhotos;
        return view("manage.working_photos.show")->with('workingPhotos', $workingPhotos)->with('workings',$workings);
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
