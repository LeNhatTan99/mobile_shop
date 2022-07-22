<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Pagination\Paginator;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(7);
        return view('layouts.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('layouts.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
       $password = Hash::make($request->password);
       $data = array_merge($request->only('name','role_id','email','phone_number','address'), [
        'email_verified_at' => Carbon::now()->toDateTimeString(),
        'password' => $password
       ]);

       DB::beginTransaction();
       try {
            $user = User::create($data);
            DB::commit();
            return redirect()->route('users.index')->with('success', 'Create user success');
       } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Create user failed');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('layouts.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('layouts.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $password = Hash::make($request->password);
        $data = array_merge($request->only('name','role_id','email','phone_number','address'), [
         'email_verified_at' => Carbon::now()->toDateTimeString(),
         'password' => $password
        ]);
        DB::beginTransaction();
        try {
            $user->update($data);
            DB::commit();
            return redirect()->route('users.index')->with('success', 'Update user success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Update user failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Delete role success');
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Delete role failed');
        }
    }
}
