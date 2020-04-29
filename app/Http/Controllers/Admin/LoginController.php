<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticateUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticateUsers;
    /**
    *Where to redirect admins after login.
    *
    * @var string
    */
    protected $redirectTo ='/admin';

    /**
    *@return void
    */
    public function __construct()
    {
    	$this->middleware('guest:admin')->expect('logout');
    }

    /**
    *@return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */

    public function showLoginForm()
    {
    	return view('admin.auth.login');
    }
}
