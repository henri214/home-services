<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceProviderController extends Controller
{
    public function dashboard()
    {
        return view('svp.dashboard');
    }
    public function profile()
    {
        $svp = ServiceProvider::where('user_id', Auth::id())->first();
        return view('svp.profile', compact('svp'));
    }
}
