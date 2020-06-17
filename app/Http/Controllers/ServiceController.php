<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Servicecategory;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services=Servicecategory::all();
        return view('admin.services.index')
                ->with('services',$services)
        
        ;
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(Request $request)
    {
        $category= new Servicecategory();
        $category->service_name=$request->input('service_name');
        $category->service_description=$request->input('service_description');       
        $category->save();
        Session::flash('statuscode','success');
        return redirect('/service-category')->with('status','Data added for About Us');


    }
    public function edit($id)
    {
        $servicecategory=Servicecategory::findOrFail($id);

        return view('admin.services.edit')->with('servicecategory', $servicecategory);
    }

    public function update(Request $request,$id)
    {
       $servicecategory=Servicecategory:: find($id);
       $servicecategory->service_name=$request->input('service_name');
       $servicecategory->service_description=$request->input('service_description');       
       $servicecategory->update();
       Session::flash('statuscode','info');
       return redirect('/service-category')->with('status','Your data is updated');


    }
    public function drop($id)
    {
        $servicecategory= Servicecategory::findOrFail($id);
        $servicecategory->delete();
        Session::flash('statuscode','error');
 
    return redirect('/service-category')->with('status', 'Your data is deleted');


    }

}
