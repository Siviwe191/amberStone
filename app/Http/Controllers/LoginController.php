<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    public function login(Request $request)
    {    
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        /**
         * Role id would come fro the user table depending on user type i.e 1 for system admin
         */

        return response()->json([
            'message' => 'Login successful',
            'user' => ['userdata'], ##Pulled from user table
            'role'=> 1
        ], 200);
        
        
    
        /*
        Please uncomment if you want login Authentication to work.
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user(),
            ], 200);
        }

    
        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);*/
    }
}
?>