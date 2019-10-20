<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
        $customers=Customer::all();
        // dd($customers);
        return view('customer.index',compact('customers'));
    }
    public function create(){
        $customer=new Customer();
        return view('customer.create',compact('customer'));
    }
    public function store(){
      
            // \App\Customer::create($this->validateData());
             // return redirect('/customers');
            // return redirect()->back();
            $customer=Customer::create($this->validateData());
            return redirect('/customers/'.$customer->id);
           
    }
    // public function show($customerId){
    //   $customer=\App\Customer::findorFail($customerId);
    // //   dd($customer);
    // return view('customer.show',compact('customer'));
    // }
    //(\App\Customer $customer)-Route model binding
    //Alternative way
    public function show(Customer $customer){
       
      //   dd($customer);
      return view('customer.show',compact('customer'));
      }
      public function edit(Customer $customer){
       return view('customer.edit',compact('customer'));
      }
      public function update(Customer $customer){
       
          $customer->update($this->validateData());

            // return redirect()->back();
            return redirect('/customers');
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('/customers');
    }
    protected function validateData(){
        return request()->validate(
            [
               'name'=>'required',
                'email'=>'required|email'
            ]);
    }

    

    
}
