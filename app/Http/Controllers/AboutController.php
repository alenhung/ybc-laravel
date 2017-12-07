<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use App\About;
use App\Role;
use DB;
use Session;
use Input;
use Image;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::orderBy('id', 'asc')->paginate(10);
        return view('manage.about.index')->withAbouts($abouts);
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
        return view('manage.about.create');
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
          'nav_title' => 'required|max:255',
          'title' => 'required|max:255',
          'description' => 'sometimes',
          'button_text' => 'required|max:255'

        ]);
        $about = new About();
        if($request->hasFile('about_image')){
            $about_image = $request->file('about_image');
            $filename = 'about-'.time() . '.' . $about_image->getClientOriginalExtension();
            Image::make($about_image)->save( public_path('/uploads/' . $filename ) );
            $about->about_image = $filename;
        }
        $about->nav_title = $request->nav_title;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->button_text = $request->button_text;
        $about->save();
        Session::flash('success', 'Successfully created the new '. $about->title . ' role in the database.');
        return redirect()->route('about.show', $about->id);
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
        $about = About::where('id', $id)->with('roles')->first();
        return view("manage.about.show")->withAbout($about);
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
        $about = About::where('id', $id)->with('roles')->first();
        return view("manage.about.edit")->withAbout($about)->withRoles($roles);
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
          'nav_title' => 'required|max:255',
          'title' => 'required|max:255',
          'description' => 'sometimes',
          'button_text' => 'required|max:255'
        ]);
        $about = About::findOrFail($id);
        if($request->hasFile('about_image')){
            $about_image = $request->file('about_image');
            $filename = 'about-'.time() . '.' . $about_image->getClientOriginalExtension();
            Image::make($about_image)->save( public_path('/uploads/' . $filename ) );
            $about->about_image = $filename;
        }else{
            $about->about_image = $request->old_image;
        }

        $about->nav_title = $request->nav_title;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->button_text = $request->button_text;
        $about->save();
        Session::flash('success', '成功建立了 '. $about->title . ' 熱銷建案於資料庫內');
        return redirect()->route('about.show', $about->id);
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
        $about = About::findOrFail($id);
        $about->delete();
        Session::flash('success', '成功刪除了 '. $about->title);
        return redirect()->route('about.index');
    }
    public function view()
    {
        //
        $abouts = About::orderBy('id', 'asc')->paginate(10);
        $historys = History::orderBy('year', 'asc')->paginate(50);
        return view('static_pages/about')->withAbouts($abouts)->withHistorys($historys);
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

            $filename = 'about-'.time() . '.' . $file->getClientOriginalExtension();
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
