<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Works;
use DB;
use Session;
use Input;
use Image;

class WorkController extends Controller
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
        return view('manage.works.create');
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
        $this->validate($request, [
          'title' => 'required|max:255',
          'slogan' => 'sometimes|max:255',
          'description' => 'sometimes|max:255',
          'location' => 'required|max:255',
          'service_location' => 'sometimes|max:255',
          'land_plan' => 'sometimes|max:255',
          'land_size' => 'sometimes|max:255',
          'households' => 'sometimes|max:255',
          'unit_area' => 'sometimes|max:255',
          'public_ratio' => 'sometimes|max:255',
          'tall' => 'sometimes|max:255',
          'completion_date' => 'sometimes|max:255',
          'public_ratio' => 'sometimes|max:255',
          'confirmed' => 'required',

        ]);
        if($request->hasFile('project_image')){
            $project_image = $request->file('project_image');
            $filename = time() . '.' . $project_image->getClientOriginalExtension();
            Image::make($project_image)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $work = new Work();
            $work->title = $request->title;
            $work->slogan = $request->slogan;
            $work->description = $request->description;
            $work->service_location = $request->service_location;
            $work->location = $request->location;
            $work->land_plan = $request->land_plan;
            $work->land_size = $request->land_size;
            $work->households = $request->households;
            $work->unit_area = $request->unit_area;
            $work->public_ratio = $request->public_ratio;
            $work->tall = $request->tall;
            $work->completion_date = $request->completion_date;
            $work->project_image = $filename;
            $work->save();
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
