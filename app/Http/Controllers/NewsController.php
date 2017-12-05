<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;
use App\News;
use App\Role;
use DB;
use Session;
use Input;
use Image;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $newss = News::orderBy('id', 'desc')->paginate(5);
      return view('manage.news.index')->withNewss($newss);
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
        return view('manage.news.create');
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
      if($request->hasFile('news_image')){
          $news_image = $request->file('news_image');
          $filename = 'news-'.time() . '.' . $news_image->getClientOriginalExtension();
          Image::make($news_image)->save( public_path('/uploads/' . $filename ) );
      }
      $news = new News();
      $news->title = $request->title;
      $news->description = $request->description;
      $news->news_image = $filename;
      $news->save();
      Session::flash('success', 'Successfully created the new '. $news->title . ' role in the database.');
      return redirect()->route('news.show', $news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $news = News::where('id', $id)->with('roles')->first();
      return view("manage.news.show")->withNews($news);
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
        $news = News::where('id', $id)->with('roles')->first();
        return view("manage.news.edit")->withNews($news)->withRoles($roles);
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
          'title' => 'required|max:255',
          'description' => 'sometimes'

        ]);
        $news = News::findOrFail($id);
        if($request->hasFile('news_image')){
            $news_image = $request->file('news_image');
            $filename = 'news-'.time() . '.' . $news_image->getClientOriginalExtension();
            Image::make($news_image)->save( public_path('/uploads/' . $filename ) );
            $news->news_image = $filename;
        }else{
            $news->news_image = $request->old_image;
        }

        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();
        Session::flash('success', '成功建立了 '. $news->title . ' 熱銷建案於資料庫內');
        return redirect()->route('news.show', $news->id);
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
        $news = News::findOrFail($id);

        $news->delete();
        Session::flash('success', '成功刪除了 '. $news->title);
        return redirect()->route('news.index');
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

            $filename = 'news-'.time() . '.' . $file->getClientOriginalExtension();
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
