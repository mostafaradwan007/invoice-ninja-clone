<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // عرض صفحة البروفايل
    public function show()
    {
        return view('auth.profile');
    }

    // تحديث بيانات البروفايل
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120', // 5MB
        ]);

        $user->name = $request->username;
        $user->email = $request->email;

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        $user->save();

        return redirect()->back()->with([
            'message' => 'Profile updated successfully!',
            'message_type' => 'success'
        ]);
    }
}
