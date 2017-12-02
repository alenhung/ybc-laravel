<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Working;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class WorkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workings = Working::orderBy('id', 'desc')->paginate(10);
        return view('manage.workings.index')->withWorkings($workings);
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
        return view('manage.workings.create');
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
          'site_url' => 'sometimes|max:255',
          'builder' => 'sometimes|max:255'

        ]);
        if($request->hasFile('project_image')){
            $project_image = $request->file('project_image');
            $filename = 'working'.time() . '.' . $project_image->getClientOriginalExtension();
            Image::make($project_image)->save( public_path('/uploads/' . $filename ) );
        }
        $working = new Working();
        $working->title = $request->title;
        $working->slogan = $request->slogan;
        $working->description = $request->description;
        $working->service_location = $request->service_location;
        $working->location = $request->location;
        $working->land_plan = $request->land_plan;
        $working->land_size = $request->land_size;
        $working->households = $request->households;
        $working->unit_area = $request->unit_area;
        $working->public_ratio = $request->public_ratio;
        $working->tall = $request->tall;
        $working->completion_date = $request->completion_date;
        $working->site_url = $request->site_url;
        $working->builder = $request->builder;
        $working->project_image = $filename;
        $working->save();
        Session::flash('success', 'Successfully created the new '. $working->title . ' role in the database.');
        return redirect()->route('workings.show', $working->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $working = Working::where('id', $id)->with('roles')->first();
      return view("manage.workings.show")->withWorking($working);
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
      $working = Working::where('id', $id)->with('roles')->first();
      return view("manage.workings.edit")->withWorking($working)->withRoles($roles);
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
      $roles = Role::all();
      $this->validate($request, [
        'title' => 'required|max:255',
        'slogan' => 'sometimes|max:255',
        'description' => 'sometimes|max:1000',
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
        'site_url' => 'sometimes|max:255',
        'builder' => 'sometimes|max:255'

      ]);
      $working = Working::findOrFail($id);
      if($request->hasFile('project_image')){
          $project_image = $request->file('project_image');
          $filename = 'working'.time() . '.' . $project_image->getClientOriginalExtension();
          Image::make($project_image)->save( public_path('/uploads/' . $filename ) );
          $working->project_image = $filename;
      }else{
          $working->project_image = $request->old_image;
      }

      $working->title = $request->title;
      $working->slogan = $request->slogan;
      $working->description = $request->description;
      $working->service_location = $request->service_location;
      $working->location = $request->location;
      $working->land_plan = $request->land_plan;
      $working->land_size = $request->land_size;
      $working->households = $request->households;
      $working->unit_area = $request->unit_area;
      $working->public_ratio = $request->public_ratio;
      $working->tall = $request->tall;
      $working->site_url = $request->site_url;
      $working->builder = $request->builder;
      $working->completion_date = $request->completion_date;

      $working->save();
      Session::flash('success', '成功建立了 '. $working->title . ' 熱銷建案於資料庫內');
      return redirect()->route('workings.show', $working->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $working = Working::findOrFail($id);

      $working->delete();
      Session::flash('success', '成功刪除了 '. $working->title);
      return redirect()->route('workings.index');
    }
}
