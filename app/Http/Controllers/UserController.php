<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.index', 
    ['users' => User::paginate(10) , 
    
]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            
        return view('admin.user.form', [
            'user' => new User(),
            'roles' => [
                'Super Administrator',
                'Product and Brand Management',
                'User Management',
                'Content and Marketing Management',
                'Analytics and Reporting Admin',
                'Order and Fulfillment Management',
                'Customer',
            ],
        ]);
        
      
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required'
        ]);

        $validated['password'] = bcrypt('password');

        User::create($validated);

        return redirect()->route('user.index')->with('success', 'User successfully created!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = [
            1 => 'Super Administrator',
            2 => 'Product and Brand Management',
            3 => 'User Management',
            4 => 'Content and Marketing Management',
            5 => 'Analytics and Reporting Admin',
            6 => 'Order and Fulfillment Management',
            7 => 'Customer',
        ];
        
       
        return view('admin.user.form',compact('roles'), [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $user->update($validated);

        return redirect()->route('user.index')->with('success', 'User successfully updated!');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete(); 
        return redirect()-> route(user.index)->with ('success' , 'User was deleted');

    }
}
