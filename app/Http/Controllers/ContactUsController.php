<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Database\Eloquent\Model;
 
class ContactUSController extends Controller
{

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contact/contact-us');
   }
   

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
		'subject' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        'type' => 'required'
        ]);
 
      ContactUS::create($request->all()); 
   
    \Mail::send('contact/contactus',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
		   'subject' => $request->get('subject'),
           'user_message' => $request->get('message'),
           'type' => $request->get('type')
       ), function($message) use ($request)
   {
      $message->from('ceronarciad@gmail.com');
      $message->to('ceronarciad@gmail.com', 'Admin')->subject('CONTACTO | ' . $request->get('subject'));
   });
    
    return  redirect()->back()->withSuccess(' Gracias por ponerte en contacto con nosotros '); 
    
   }
}