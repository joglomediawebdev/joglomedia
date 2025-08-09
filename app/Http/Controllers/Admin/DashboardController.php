<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $adminName = 'Guest';
        $adminEmail = 'Not logged in';

        if ($user) {
            $adminName = $user->name;
            $adminEmail = $user->email;
        }

        return view('Admin.index', [
            'adminName' => $adminName,
            'adminEmail' => $adminEmail,
        ]);
    }
}
