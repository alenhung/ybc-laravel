<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;
use App\History;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $historys = History::orderBy('year', 'asc')->paginate(50);
        return view('manage.history.index')->withHistorys($historys);
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
        return view('manage.history.create');
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
      $this->validate($request, [
        'year' => 'required|max:255',
        'title' => 'required|max:255',
        'url' => 'sometimes',
        'description' => 'sometimes'
      ]);
      $history = new History();
      if($request->hasFile('history_image')){
          $history_image = $request->file('history_image');
          $filename = 'history-'.time() . '.' . $history_image->getClientOriginalExtension();
          Image::make($history_image)->save( public_path('/uploads/' . $filename ) );
          $history->history_image = $filename;
      }
      $history->year = $request->year;
      $history->title = $request->title;
      $history->description = $request->description;
      $history->url = $request->url;
      $history->save();
      Session::flash('success', 'Successfully created the new '. $history->title . ' role in the database.');
      return redirect()->route('history.show', $history->id);
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
        $history = History::where('id', $id)->with('roles')->first();
        return view("manage.history.show")->withHistory($history);
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
        $history = History::where('id', $id)->with('roles')->first();
        return view("manage.history.edit")->withHistory($history)->withRoles($roles);
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
        'year' => 'required|max:255',
        'url' => 'sometimes',
        'description' => 'sometimes'

      ]);
      $history = History::findOrFail($id);
      if($request->hasFile('history_image')){
          $history_image = $request->file('history_image');
          $filename = 'history-'.time() . '.' . $history_image->getClientOriginalExtension();
          Image::make($history_image)->save( public_path('/uploads/' . $filename ) );
          $history->history_image = $filename;
      }else{
          $history->history_image = $request->old_image;
      }
      $history->year = $request->year;
      $history->title = $request->title;
      $history->description = $request->description;
      $history->url = $request->url;
      $history->save();
      Session::flash('success', '成功建立了 '. $history->title . ' 熱銷建案於資料庫內');
      return redirect()->route('history.show', $history->id);
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
        $history = History::findOrFail($id);

        $history->delete();
        Session::flash('success', '成功刪除了 '. $history->title);
        return redirect()->route('history.index');
    }
    public function uploadImage(Request $request)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上傳失敗!',
            'file_path' => ''
        ];
        if($file = $request->upload_file){

            $filename = 'history-'.time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->save( public_path('/uploads/' . $filename ) );
            $result = url('/uploads/' . $filename);

            if ($result) {
                $data['file_path'] = $result;
                $data['msg']       = "上傳成功!";
                $data['success']   = true;
            }
        }
        return $data;

    }
}
