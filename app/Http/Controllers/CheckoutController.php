<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    public function check(Request $request): View
    {
        return view('checkout.check', [
            'user' => $request->user(),
        ]);
    }
}
