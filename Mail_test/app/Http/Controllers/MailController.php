<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
    
    
    
//this function to send a basic email
  public function index()
  {
    
    $user_name = "abc";//name of receiver
    $email = 'abck@gmail.com';//mail of receiver

    $data = array(
      "name"=>$user_name,
      "body"=>"this code for sending email using laravel"
    );

    //data : information to (send name of receiver and the body of email).
    //'mail' : name of view
      Mail::send(['text' => 'mail'], $data, 
      function($msg) use($email, $user_name){
        $msg->to($email, $user_name)->subject('test send email');
        $msg->from('n.bakenchich@gmail.com','Administration');//source mail
    });
      echo "email sent";
  } 


  //this function to send a images email
  public function attach()
  {
    
    $user_name = "abc";//name of receiver
    $email = 'abck@gmail.com';//mail of receiver
    
    $data = array(
      "name"=>$user_name,
      "body"=>"this code for sending email using laravel"
    );

    //data : information to (send name of receiver and the body of email).
    //'mail' : name of view
      Mail::send('mail', $data, 
      function($msg) use($email, $user_name){
        $msg->to($email, $user_name)->subject('test send email');
        $msg->attach('C:\Users\alice\Desktop\React_project-mine\send_email\Mail_test\public\uploads\logo.png');
        $msg->from('xyz@gmail.com','xyz');//source mail
    });
      echo "email sent";
  }

 





}