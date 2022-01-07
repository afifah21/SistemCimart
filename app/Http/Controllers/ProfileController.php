<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $profile = User::where('id',$id)->first();
        return view('dashboard.crud.profile.index',compact('profile'));
    }

    public function edit($id)
    {
        $profile = User::where('id',$id)->first();
        return view('dashboard.crud.profile.edit',compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $req = $request->except(['_token','_method']);
        try {
            User::where('id',$id)->update($req);
            return redirect()->route('profile.index')->with(["success"=>"Data Berhasil di update"]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with(["error"=>"Data gagal di update : ".$e->getMessage()]);
        }
    }

    public function change($id)
    {
        $profile = User::where('id',$id)->first();
        return view('dashboard.crud.profile.change',compact('profile'));
    }

    public function changed(Request $request,$id)
    {
        $req = $request->except(['_token','_method']);
        $profile = User::where('id',$id)->first();
        
        try {
            if (Hash::check($req['password'],$profile->password) && $req['newpassword'] == $req['cnewpassword']) {
                $data['password'] = $req['newpassword'];
                User::where('id',$id)->update($data);
            }
            return redirect()->route('profile.index')->with(["success"=>"Password Berhasil di ganti"]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with(["error"=>"Password Gagal di ganti : ".$e->getMessage()]);
        }
        return view('dashboard.crud.profile.edit',compact('profile'));
    }

}
