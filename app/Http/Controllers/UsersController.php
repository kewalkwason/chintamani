<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Role;
use Spatie\Permission\Models\Role;
use App\Models\Designation;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function users()
    {
        $user = User::orderBy('id','DESC')->get();
        $role = Role::get();
        return view('admin.users.index',compact('user','role'));
    }

    public function addUsers()
    {
        $role = Role::get();
        return view('admin.users.add',compact('role'));
    }

    public function editUsers($id)
    {
        $role = Role::get();
        $user = User::where('id',$id)->first();
        return view('admin.users.edit',compact('user','role'));
    }

    public function usersSave(Request $request)
    {
        if($request->id != '')
        {  
            $this->validate($request, [
                'first_name'               => 'required',  
                'email'              => 'required',
                'phone'              => 'required',
                'password'              => 'nullable',
                'password_confirmation'              => 'nullable',
            ]);
        } else {
            $this->validate($request, [
                'first_name'               => 'required',  
                'email'              => 'required',
                'phone'              => 'required',
                'password'              => 'required',
                'password_confirmation'              => 'required',
            ]);
        }

        $role = Role::where('id',$request->role)->first();

        if($request->id != '')
        {  
            $saveData                = User::find($request->id);
            $saveData->first_name          = $request->first_name;
            $saveData->last_name          = $request->last_name;
            $saveData->email          = $request->email;
            $saveData->phone          = $request->phone;
            $saveData->employee_id          = $request->employee_id;
            $saveData->address          = $request->address;
            $saveData->password          = Hash::make($request->password);
            $saveData->role          = $request->role;
            $saveData->status         = 1;
            $saveData->save();
            $saveData->assignRole($request->input('role'));
            return redirect(route('users'));
        } else {
            $saveData                = new User;
            $saveData->first_name          = $request->first_name;
            $saveData->last_name          = $request->last_name;
            $saveData->email          = $request->email;
            $saveData->phone          = $request->phone;
            $saveData->employee_id          = $request->employee_id;
            $saveData->address          = $request->address;
            $saveData->password          = Hash::make($request->password);
            $saveData->role          = $request->role;
            $saveData->status         = 1;
            $saveData->save();
            $saveData->assignRole($request->input('role'));
            return redirect(route('users'));
        }
    }

    public function usersDelete($id)
    {
        $department = User::find($id)->delete();
        return back();
    }

    public function usersBanned($id)
    {
        dd($id);
    }

    public function usersProfile($id)
    {
        dd($id);
    }
}
