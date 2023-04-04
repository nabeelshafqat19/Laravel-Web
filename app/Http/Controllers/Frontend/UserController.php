<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.users.profile');
    }

    public function updateUserDetails(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->update([
                'name' => $request->username
        ]);

        $user->userDetail()->updateOrCreate(
            [
                'user_id' => $student_id,
            ],
            [
                'phone' => $request->alternate_phone,
                'pin_code' => $request->pin_code,
                'address' => $request->address,
            ]
        );
    }
}
