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
        $workings = Working::all();
        $workingphotos = WorkingPhotos::orderBy('id', 'desc')->paginate(10);
        return view('manage.working_photos.index')->withWorkings($workings)->withWorkingPhotos($workingphotos);
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
        //
        // return $request->all();

        if($request->hasFile('file')){

          foreach ($request->file as $file) {

            $filename = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->save( public_path('/uploads/' . $filename ) );

            $workingsPotos = new WorkingPhotos();
            $workingsPotos->workings_id = $request->working_id;
            $workingsPotos->workings_image = $filename;
            $workingsPotos->save();
            Session::flash('success', 'Successfully created the new   role in the database.');
            return redirect()->route('workings.show');

          }
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
