<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\ForgottenPasswordRequest;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\OtpCodeRequest;
use App\Http\Requests\Authentication\RegistrationRequest;
use App\Http\Requests\OtpCodeRequest as RequestsOtpCodeRequest;
use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthenticationInterface $authInterface;

    public function __construct(AuthenticationInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            if ($this->authInterface->login($data)) {
                return redirect()->route('dashboard');
            } else {
                return back()->with('error', "Email or password incorrect.");
            }
        } catch (\Exception $ex) {
            return back()->with('error', 'An error occurred during processing. Please try again!');
        }
    }

    public function registration(RegistrationRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            $user = $this->authInterface->registration($data);
            Auth::login($user);
            return redirect()->route('dashboard');
        } catch (\Exception $ex) {
            return back()->with('error', 'An error occurred during processing. Please try again!');
        }
    }

    // public function forgottenPassword(ForgottenPasswordRequest $request)
    // {
    //     $data = [
    //         'email' => $request->email,
    //     ];

    //     try {
    //         if ($this->authInterface->forgottenPassword($data)) {
    //             return redirect()->route('otpCode');
    //         } else {
    //             return back()->with('error', "Email not found.");
    //         }
    //     } catch (\Exception $ex) {
    //         return back()->with('error', 'An error occurred during processing. Please try again!');
    //     }
    // }

    // public function checkOtpCode(OtpCodeRequest $request)
    // {
    //     $data = [
    //         'email' => $request->email,
    //         'code' => $request->code,
    //     ];

    //     try {
    //         $code = $this->authInterface->checkOtpCode($data);

    //         if (!$code) {
    //             return back()->with('error', "Invalid confirmation code.");
    //         } else {
    //             return redirect()->route('newPassword');
    //         }
    //     } catch (\Exception $ex) {
    //         return back()->with('error', 'An error occurred during processing. Please try again!');
    //     }
    // }

    // public function newPassword(OtpCodeRequest $request)
    // {
    //     $data = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //         'passwordConfirm' => $request->passwordConfirm,
    //         'code' => $request->code,
    //     ];

    //     try {
    //         $user = $this->authInterface->newPassword($data);

    //         if (!$user) {
    //             return back()->with('error', 'Unable to update. Please try again.');
    //         } else {
    //             return redirect()->route('dashboard');
    //         }
    //     } catch (\Exception $ex) {
    //         return back()->with('error', 'An error occurred during processing. Please try again!');
    //     }
    // }
}
