<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\BookAppointment;
use App\Models\Doctor;
use App\Models\EyeDisease;
use App\Models\Service;
class HomeController extends Controller
{
    public function index()
    {
       $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
       $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
       $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
       $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
       $service_all = Service::orderBy('order','ASC')->where('status','1')->paginate(8);
       $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_all'=>$service_all,
            'service_menu' => $service_menu
        );
        return view('frontend.index',$data);
    }
    public function doctors()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.doctors',$data);
    }

    
    public function doctors_detail(Request $request)
    {
        $url_doctor = $request->url_doctor;
        // var_dump($request->all());
        // exit();
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $doctors_detail = Doctor::where('url_doctor',$url_doctor)->get();
        $data = array(
            'service_sub'=> $service_sub,
            'doctor'=>$doctor,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu,
            'doctors_detail'=>$doctors_detail[0]
        );
        // echo json_encode($doctor);
        // exit();
        return view('frontend.doctors_detail',$data);
    }




    public function abouts()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.abouts',$data);
    }
    public function services()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $service_all = Service::orderBy('order','ASC')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_all' => $service_all,
            'service_menu' => $service_menu
        );
        return view('frontend.services',$data);
    }
    // public function services_detail()
    // {
    //     $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
    //     $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
    //     $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
    //     $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
    //     $data = array(
    //         'doctor'=>$doctor,
    //         'service_sub'=> $service_sub,
    //         'eye_disease_all'=>$eye_disease_all,
    //         'service_menu' => $service_menu
    //     );
    //     return view('frontend.services_detail',$data);
    // }
    public function eyediseases_detail(Request $request)
    {
        $url_name = $request->url_name;
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $eye_disease = EyeDisease::orderBy('id','ASC')->where('url_name',$url_name)->where('status','1')->get();
        $data = array(
            'service_sub'=> $service_sub,
            'doctor'=>$doctor,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu,
            'eye_disease'=>$eye_disease[0],
            'url_name' => $url_name
        );
        return view('frontend.eyediseases_detail',$data);
    }
    public function machines()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.machines',$data);
    }
    public function faqs()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.faqs',$data);
    }
    public function appointments()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.appointments',$data);
    }
    public function single_service(Request $request)
    {
        $url_service = $request->url_service;
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $service_all = Service::orderBy('order','ASC')->where('status','1')->get();
        $single_service = Service::orderBy('order','ASC')->where('url_service',$url_service)->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu,
            'single_service' => $single_service[0],
            'service_all' => $service_all,
            'url_service' => $url_service
        );
        return view('frontend.single_service',$data);
    }
    public function galleries()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.galleries',$data);
    }
     public function locations()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.locations',$data);
    }
     public function privacy_policy()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.privacy_policy',$data);
    }
     public function prices()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.prices',$data);
    }
     public function blogs()
    {
        $doctor = Doctor::orderBy('id','ASC')->where('status','1')->get();
        $eye_disease_all = EyeDisease::orderBy('order','ASC')->where('status','1')->get();
        $service_menu = Service::orderBy('order','ASC')->where('position','menu')->where('status','1')->get();
        $service_sub = Service::orderBy('order','ASC')->where('position','sub')->where('status','1')->get();
        $data = array(
            'doctor'=>$doctor,
            'service_sub'=> $service_sub,
            'eye_disease_all'=>$eye_disease_all,
            'service_menu' => $service_menu
        );
        return view('frontend.blogs',$data);
    }
    public function sendEmail(Request $request)
    {
         $details = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'textarea'=>$request->textarea
        );
         
        Mail::to("parismikicambodia9999@gmail.com")->send(new SendMail($details));
        return redirect()->back()->with('success', 'Your Message Sent successfully! Thank You!');
    }
    public function BookAppointment(Request $request)
    {
         $details = array(
            'doctor_name' => $request->doctor_name,
            'first_name' => $request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'message'=>$request->message
        );
         
        Mail::to("parismikicambodia9999@gmail.com")->send(new BookAppointment($details));
        return redirect()->back()->with('success', 'Your Message Sent successfully! Thank You!');
    }
    
}