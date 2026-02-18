<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle user registration
     */
   public function register(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'phone' => 'required|string|max:191|unique:users',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => 'nullable|in:admin,user,trader',
            'has_whatsapp' => 'nullable|boolean',
            'has_viber' => 'nullable|boolean',
        ]);

        // Create user
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'password' => $validated['password'], // 'hashed' casting in model will hash automatically
            'role' => $validated['role'] ?? 'user',
            'has_whatsapp' => $validated['has_whatsapp'] ?? false,
            'has_viber' => $validated['has_viber'] ?? false,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'data' => $user,
        ], 201);
    }
}
