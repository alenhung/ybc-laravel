<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceInfo;
use DB;
use Image;
use App\ContactInfo;
use Illuminate\Support\Facades\Mail;

class ServicePagesController extends Controller
{
    public function contact()
    {
      $serviceInfos = ServiceInfo::orderBy('id', 'asc')->paginate(10);
      $contactInfo = ContactInfo::where('id',1)->first();
      return view('service_pages/contact')->withServiceInfos($serviceInfos)->withContactInfo($contactInfo);
    }

    public function mailsender(Request $request){
      // return $request->all();
      $this->validate($request, [
        'name' => 'required|max:255',
        'tel' => 'required|max:255',
        'email' => 'required|email',
        'question' => 'required|max:255',
        'msg' => 'required|max:255'
      ]);
      $data = array(
        'name' => $request->name,
        'tel' => $request->tel,
        'email' => $request->email,
        'question' => $request->question,
        'msg' => $request->msg
    );
    Mail::send('emails.ContactForm', $data, function ($Mailmessage) {

      $Mailmessage->from('alenhung@gmail.com', '員邦建築網站客服信箱');

      $Mailmessage->to('alenhung@gmail.com')->subject('員邦建築網站客服來信！');

  });
      return redirect()->back()->with('flash_message','我們已收到您的聯絡訊息，將儘快與您聯繫！');
    }
}
