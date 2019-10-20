<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function about(){
        
        // $variable  = 'Hi!! i am new in laravel excited';
        // return view('subviews.hello',
        // ['data'=>$variable]);
        return view('about');
    
}
public function index(){
    //Model singular version of the work
    //service
    //Table plural
    //services
    // $services=[
    //   'Service1',
    // //   'Service2',
    // //   'Service3',
    // //   'Service4',
    // ];
    $services=\App\Service::all();
    // dd($services);
    return view('services.index',compact('services'));


}
public function store(){

    $data=request()->validate(
        [
           'name'=>'required|min:5|max:10',
        ]
        );
        \App\Service::create($data);
    // $service=new \App\Service();
    // $service->name=request('name');
    // $service->save();
    // dd(request('name'));
    return redirect()->back();
}
}
