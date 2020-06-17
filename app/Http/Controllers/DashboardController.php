<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
class DashboardController extends Controller
{
    //
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request, $id)
    {
        $users=User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request, $id)
    {
        $users=User::find($id);
        $users->name=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();
        return redirect('/roleregister')->with('status', 'Your data is updated');
    }
    public function destroy($id)
    {
      $users=User::find($id);
      $users->delete();  
      return redirect('/roleregister')->with('status', 'Your data is deleted');
       
    }
}
