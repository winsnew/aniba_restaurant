<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\User\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('cms.pages.users.index',compact('data'));
    }
    public function save(Request $request)
    {
        $id = $request->input('id');
        $change_password = $request['change_password'];
        $user = User::find($id);
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
        ];
        if($user){
            $this->validate($request, [
                'name' => 'required',
                'email' => 'unique:users,email,' . $user->id
            ]);
            if($change_password == 1){
                $this->validate($request, [
                    'password' => 'min:5| required_with:confirm_password|same:confirm_password',
                ]);
                $data = array_merge($data, ['password' => Hash::make($request['password'])]);
                $user->update($data);
            }
            $this->validate($request, [
                'password' => 'nullable',
            ]);
            $user->update($data);
        }else{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'min:5| required_with:confirm_password|same:confirm_password',
            ]);
            $data = array_merge($data, ['password' => Hash::make($request['password'])]);
            User::create($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success'
        ], 200);
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return response()->json([
            'success' => true,
            'message' => 'User Deleted'
        ],200);
    }
}
