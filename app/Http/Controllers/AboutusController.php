<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Abouts;


class AboutusController extends Controller
{
    //
    public function index()
    {
        $aboutus=Abouts::all();
        return view('admin.abouts')->with('aboutus',$aboutus);
    }
    public function store(Request $request)
    {
        $aboutus= new Abouts;
        $aboutus->title= $request->input('title');
        $aboutus->subtitle= $request->input('subtitle');
        $aboutus->description= $request->input('description');
        $aboutus->save();
        Session::flash('statuscode','success');
        return redirect('/abouts')->with('status','Data added for About Us');
    }
   public function edit($id)
   {
        $aboutus=Abouts::findOrFail($id);
        return view('admin.abouts.edit')->with('aboutus', $aboutus);
   }
   public function update(Request $request,$id)
   {
       $aboutus= Abouts::find($id);
       $aboutus->title= $request->input('title');
       $aboutus->subtitle= $request->input('subtitle');
       $aboutus->description= $request->input('description');
       $aboutus->update();

       Session::flash('statuscode','info');
       return redirect('/abouts')->with('status','Your data is updated');


   }
   public function destroy($id)
   {
    $aboutus= Abouts::findOrFail($id);
    $aboutus->delete();
    Session::flash('statuscode','error');
 
    return redirect('/abouts')->with('status', 'Your data is deleted');

   

   }

}
