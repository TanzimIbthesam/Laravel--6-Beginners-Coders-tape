<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about(){
        
            // $variable  = 'Hi!! i am new in laravel excited';
            // return view('subviews.hello',
            // ['data'=>$variable]);
            return view('about');
        
    }
    
//     public function services(){
//         //Model singular version of the work
//         //service
//         //Table plural
//         //services
//         // $services=[
//         //   'Service1',
//         // //   'Service2',
//         // //   'Service3',
//         // //   'Service4',
//         // ];
//         $services=\App\Service::all();
//         // dd($services);
//         return view('services',compact('services'));

    
// }
}
