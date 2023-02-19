<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.user.users', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('admin.user.user-create', []);
    }

    /**
     * Store a new user
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {

        $user = $request->all();

        $validator = Validator::make($user, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ], [
            'required' => ':attribute is een verplicht veld.'
        ], [
            'name' => 'Naam',
            'password' => 'Wachtwoord',
            'email' => 'E-mail'
        ]);

        if ($validator->fails()) {

            return view('admin.user.user-create', [
                'user' => $user,
                'errors' => $validator->messages()
            ]);
        }

        $user['password'] = Hash::make($user['password']);
        User::create($user);

        return view('admin.user.users', [
            'users' => User::all()
        ]);
    }
        

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.user.user-detail', [
            'user' => User::findOrFail($id)
        ]);
    }

    function edit($id)
    {

        $user = User::where('id', $id)->first();

        return view('admin.user.user-edit', ['user' => $user]);
    }

    function destroy($id)
    {

        $user = User::where('id', $id)->first();
        User::destroy($id);

        return response()->json([
            'success' => true,
            'payload' => $user
        ], 200);
    }

    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    function update(Request $request, $id)
    {
        $old = $request->all();
        $user = User::where('id', $id)->first();

        $validator = Validator::make($old, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ], [
            'required' => ':attribute is een verplicht veld.'
        ], [
            'name' => 'Naam',
            'password' => 'Wachtwoord',
            'email' => 'E-mail'
        ]);

        if ($validator->fails()) {

            return view('admin.user.user-edit', [
                'user' => $user,
                'errors' => $validator->messages()
            ]);
        }

        $user->name = $old['name'];
        $user->email = $old['email'];
        //$user->password = Hash::make($old['password']);
        $user->save();

        return view('admin.user.users', ['users' => [$user]]);
    }
}