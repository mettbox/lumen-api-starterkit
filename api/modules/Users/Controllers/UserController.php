<?php

namespace Modules\Users\Controllers;

use App\Http\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Users\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function me()
    {
        // Get the currently authenticated user...
        $user = Auth::user();

        return response()->json($user);
    }
}
