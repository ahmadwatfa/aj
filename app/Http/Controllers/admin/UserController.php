<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $rules = [

        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'r1' => ['required'],

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id' , '!=' ,  1)->get();
        return view('admin.pages.user.user-table', [
            'users' => $users,
        ]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate($this->rules);
        $user = new User();
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->role = $request->post('r1');
        $user->password = Hash::make($request->post('password'));

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::findOrFail($id);
        return view('admin.pages.user.update_user', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        'name' => ['required', 'string', 'max:25'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'r1' => ['required'],
    ],[
            
    'required' => 'هذا الحقل مطلوب' ,
    'email' => 'البريد الالكتروني غير صحيح' ,
    'string' => 'هذا الحقل يجب ان يحتوى على نص' ,
    'min' => 'هذا الحقل اقصر من 8 احرف' ,
    'confirmed' => 'كلمة المرور غير متطابقة' ,
    
]);
        $user = User::findOrFail($id);
        $password = Hash::make($request->post('password')); 
        $data = array_merge($request->all(),['password' => $password] );

        $user->update($data);

        return redirect()->route('user.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index');
    }
}
