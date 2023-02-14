<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
     
    }

    public function update(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email, 
            'updated_at' => now()
        ]);

        // return $this->success('profile','Profile updated successfully!');
        return redirect()->route('coffe.index');
    }
}
