<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    public function roles()
    {
        $role = Role::orderBy('id','DESC')->get();
        return view('admin.roles.index',compact('role'));
    }

    public function rolesEdit($id)
    {
        $data = Role::where('id',$id)->first();
        return view('admin.roles.edit',compact('data'));
    }

    public function rolesAdd()
    {
        return view('admin.roles.add');
    }

    public function rolesSave(Request $request)
    {
        if($request->id != '')
        {  
            $this->validate($request, [
                'name'               => 'required',  
                'permission'               => 'required',  
                'status'             => 'required',
            ]);
        } else {
            $this->validate($request, [
                'name'               => 'required',  
                'permission'               => 'required',  
                'status'             => 'required',
            ]);
        }

        if($request->id != '')
        {  
            $saveData                = Role::find($request->id);
            $saveData->name          = $request->name;
            $saveData->permission          = $request->permission;
            $saveData->status        = $request->status;
            $saveData->save();
            return redirect(route('roles'));
        } else {
            $saveData                = new Role;
            $saveData->name          = $request->name;
            $saveData->permission          = $request->permission;
            $saveData->status        = $request->status;
            $saveData->save();
            return redirect(route('roles'));
        }
    }

    public function rolesDelete($id)
    {
        $roles = Role::find($id)->delete();
        return back();
    }
}
