<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthHelper
{
    /**
     * Sanitize input data
     */
    public static function sanitize_input($data) 
    {
        return trim(strip_tags($data));
    }

    /**
     * Validate email format
     */
    public static function validate_email($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Validate password strength
     */
    public static function validate_password($password) 
    {
        if (strlen($password) < 6) {
            return "Password must be at least 6 characters long";
        }
        return true;
    }

    /**
     * Hash password securely
     */
    public static function hash_password($password) 
    {
        return Hash::make($password);
    }

    /**
     * Verify password
     */
    public static function verify_password($password, $hash) 
    {
        return Hash::check($password, $hash);
    }

    /**
     * Check if user exists by email
     */
    public static function user_exists($email) 
    {
        return User::where('email', $email)->exists();
    }

    /**
     * Get user by email and password
     */
    public static function authenticate_user($email, $password) 
    {
        $user = User::where('email', $email)->first();
        
        if ($user && Hash::check($password, $user->password)) {
            return $user;
        }
        
        return false;
    }

    /**
     * Register new user
     */
    public static function register_user($username, $email, $password, $profile_image = null) 
    {
        if (self::user_exists($email)) {
            return ['success' => false, 'message' => 'Email already registered'];
        }
        
        try {
            $user = User::create([
                'username' => $username,
                'email' => $email,
                'password' => Hash::make($password),
                'profile_image' => $profile_image,
                'date' => now(),
            ]);
            
            return ['success' => true, 'message' => 'Registration successful'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => 'Registration failed'];
        }
    }

    /**
     * Update user profile
     */
    public static function update_user($user_id, $username, $email, $profile_image = null) 
    {
        try {
            $updateData = [
                'username' => $username,
                'email' => $email,
            ];
            
            if ($profile_image !== null) {
                $updateData['profile_image'] = $profile_image;
            }
            
            User::where('id', $user_id)->update($updateData);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Delete user account
     */
    public static function delete_user($user_id) 
    {
        try {
            User::where('id', $user_id)->delete();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Handle file upload
     */
    public static function handle_file_upload($file, $upload_dir = "uploads/") 
    {
        if (!$file || $file->getError() !== UPLOAD_ERR_OK) {
            return null;
        }
        
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        $file_extension = strtolower($file->getClientOriginalExtension());
        
        if (!in_array($file_extension, $allowed_types)) {
            return null;
        }
        
        if ($file->getSize() > 5 * 1024 * 1024) {
            return null;
        }
        
        $filename = time() . '_' . uniqid() . '.' . $file_extension;
        
        $file->storeAs('public/' . $upload_dir, $filename);
        
        return $filename;
    }

    /**
     * Start secure session
     */
    public static function start_secure_session() 
    {
        // Laravel handles this automatically
        return true;
    }

    /**
     * Check if user is logged in
     */
    public static function is_logged_in() 
    {
        return Auth::check();
    }

    /**
     * Redirect to login if not authenticated
     */
    public static function require_login() 
    {
        if (!Auth::check()) {
            header("Location: " . url('/auth/login.php'));
            exit;
        }
    }

    /**
     * Logout user
     */
    public static function logout_user() 
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }
}