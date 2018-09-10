<?php

namespace App\Http\Controllers\Auth\ModerateurAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    use ResetsPasswords;

    protected $guard = 'moderateur';
    protected $broker = 'moderateurs';

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:moderateur');
    }

    public function getEmail()
    {
        return $this->showLinkRequestForm();
    }

    public function showLinkRequestForm()
    {
        if (property_exists($this, 'linkRequestView')) {
            return view($this->linkRequestView);
        }

        if (view()->exists('admin.auth.passwords.email')) {
            return view('admin.auth.passwords.email');
        }

        return view('admin.auth.password');
    }

    public function showResetForm(Request $request, $token = null)
    {

        if (is_null($token)){
            return $this->getEmail();
        }
        $email = $request->input('email');

        if (property_exists($this, 'resetView')) {
            return view($this->resetView)->with(compact('token', 'email'));
        }

        if (view()->exists('moderateur.auth.passwords.reset')) {
            return view('moderateur.auth.passwords.reset')->with(compact('token', 'email'));
        }

        return view('moderateur.passwords.auth.reset')->with(compact('token', 'email'));
    }

}
