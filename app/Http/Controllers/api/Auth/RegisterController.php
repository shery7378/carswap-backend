<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        try {

            // check existing email
            $existingUser = User::where('email', $request->email)->first();

            if ($existingUser) {
                return response()->json([
                    'success' => true,
                    'message' => 'User already registered',
                ], 200);
            }

            $validated = $request->validate([
                'first_name' => 'required|string|max:191',
                'last_name' => 'required|string|max:191',
                'phone' => 'required|string|max:191',
                'email' => 'required|string|email|max:191|unique:users,email',
                'password' => [
                    'required',
                    'confirmed',
                    'min:6',
                    'regex:/^[A-Z]/',
                    'regex:/[@$!%*#?&]/'
                ],
                'role' => 'nullable|in:admin,user,trader',
                'has_whatsapp' => 'nullable|boolean',
                'has_viber' => 'nullable|boolean',
            ], [
                'password.regex' => 'Password must start with a capital letter and include a special character.',
            ]);

            $user = User::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role'] ?? 'user',
                'has_whatsapp' => $validated['has_whatsapp'] ?? false,
                'has_viber' => $validated['has_viber'] ?? false,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User registered successfully'
            ], 201);
        } catch (ValidationException $e) {

            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Server error'
            ], 500);
        }
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'token' => $token,
            'token_type' => 'Bearer',
            'data' => $user
        ]);
    }

    public function profile(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => $request->user()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'first_name' => 'sometimes|required|string|max:191',
            'last_name' => 'sometimes|required|string|max:191',
            'phone' => 'sometimes|required|string|max:191|unique:users,phone,' . $user->id,
            'email' => 'sometimes|required|email|max:191|unique:users,email,' . $user->id,
            'new_password' => ['sometimes', 'confirmed', 'min:6'],
            'current_password' => 'required_with:new_password|current_password',
            'profile_picture' => 'nullable|image|max:2048',
            'has_whatsapp' => 'nullable|boolean',
            'has_viber' => 'nullable|boolean',
            'is_email_visible' => 'nullable|boolean',
        ]);

        if ($request->hasFile('profile_picture')) {
            $validated['profile_picture'] = $request->file('profile_picture')->store('profiles', 'public');
        }

        if (!empty($validated['new_password'])) {
            $validated['password'] = Hash::make($validated['new_password']);
            unset($validated['new_password']);
            unset($validated['new_password_confirmation']);
        } else {
            unset($validated['new_password']);
            unset($validated['new_password_confirmation']);
        }

        if (isset($validated['current_password'])) {
            unset($validated['current_password']);
        }

        $user->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully',
            'data' => $user
        ]);
    }
}
