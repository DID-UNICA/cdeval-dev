<?php

namespace App\Http\Controllers\Auth;

use App\Coordinacion;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CoordinacionLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/area';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     *
     * @return property guard use for login
     *
     */
    public function guard()
    {
     return Auth::guard('coordinador');
    }

    // login from for coordinador
    public function showLoginForm()
    {
        return view('pages.main')->with('coordinaciones', Coordinacion::all()->pluck('abreviatura','nombre_coordinacion'));
    }

    public function username()
    {
        return 'abreviatura';
    }
}
