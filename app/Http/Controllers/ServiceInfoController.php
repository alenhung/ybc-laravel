<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;
use App\ServiceInfo;
use App\Role;
use DB;
use Session;
use Input;
use Image;

class ServiceInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $serviceInfos = ServiceInfo::orderBy('id', 'desc')->paginate(10);
      return view('manage.serviceInfo.index')->withServiceInfos($serviceInfos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Role::all();
      return view('manage.serviceInfo.create');
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
        'title' => 'required|max:255',
        'description' => 'sometimes'
      ]);
      $serviceInfo = new ServiceInfo();
      if($request->hasFile('serviceInfo_image')){
          $serviceInfo_image = $request->file('serviceInfo_image');
          $filename = 'serviceInfo-'.time() . '.' . $serviceInfo_image->getClientOriginalExtension();
          Image::make($serviceInfo_image)->save( public_path('/uploads/' . $filename ) );
          $serviceInfo->serviceInfo_image = $filename;
      }
      $serviceInfo->title = $request->title;
      $serviceInfo->description = $request->description;
      $serviceInfo->save();
      Session::flash('success', 'Successfully created the new '. $serviceInfo->title . ' role in the database.');
      return redirect()->route('serviceInfo.show', $serviceInfo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $serviceInfo = ServiceInfo::where('id', $id)->with('roles')->first();
      return view("manage.serviceInfo.show")->withServiceInfo($serviceInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $roles = Role::all();
      $serviceInfo = ServiceInfo::where('id', $id)->with('roles')->first();
      return view("manage.serviceInfo.edit")->withServiceInfo($serviceInfo)->withRoles($roles);
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
        'description' => 'sometimes'

      ]);
      $serviceInfo = ServiceInfo::findOrFail($id);
      if($request->hasFile('serviceInfo_image')){
          $serviceInfo_image = $request->file('serviceInfo_image');
          $filename = 'serviceInfo-'.time() . '.' . $serviceInfo_image->getClientOriginalExtension();
          Image::make($serviceInfo_image)->save( public_path('/uploads/' . $filename ) );
          $serviceInfo->serviceInfo_image = $filename;
      }else{
          $serviceInfo->serviceInfo_image = $request->old_image;
      }
      $serviceInfo->title = $request->title;
      $serviceInfo->description = $request->description;
      $serviceInfo->save();
      Session::flash('success', '成功建立了 '. $serviceInfo->title . ' 熱銷建案於資料庫內');
      return redirect()->route('serviceInfo.show', $serviceInfo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $serviceInfo = ServiceInfo::findOrFail($id);

      $serviceInfo->delete();
      Session::flash('success', '成功刪除了 '. $serviceInfo->title);
      return redirect()->route('serviceInfo.index');
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

            $filename = 'serviceInfo-'.time() . '.' . $file->getClientOriginalExtension();
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
