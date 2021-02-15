<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Laravel\Socialite\Facades\Socialite;
use App\Models\User; 
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }





    // 省略
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $gUser = Socialite::driver('google')->stateless()->user();
        // email が合致するユーザーを取得
        $user = User::where('email', $gUser->email)->first();
        // 見つからなければ新しくユーザーを作成
        if ($user == null) {
            $user = $this->createUserByGoogle($gUser);
        }
        // ログイン処理
        \Auth::login($user, true);
        return redirect('/');
    }

    public function createUserByGoogle($gUser)
    {
        $user = User::create([
            'name'     => $gUser->name,
            'email'    => $gUser->email,
            'password' => \Hash::make(uniqid()),
        ]);
        return $user;
    }



//github認証
public function redirectToGithub()
{
    return Socialite::driver('github')->redirect();
}

public function handleGithubkCallback()
{
    $fUser = Socialite::driver('github')->stateless()->user();
    // email が合致するユーザーを取得
    $user = User::where('email', $fUser->email)->first();
    // 見つからなければ新しくユーザーを作成
    if ($user == null) {
        $user = $this->createUserByGithub($fUser);
    }
    // ログイン処理
    \Auth::login($user, true);
    return redirect('/');
}

public function createUserByGithub($fUser)
{
    $user = User::create([
        'name'     => $fUser->name,
        'email'    => $fUser->email,
        'password' => \Hash::make(uniqid()),
    ]);
    return $user;
}

// public function signin()
//     {
//         return view('/');
//     }

//     public function login()
//     {
//         return Socialite::driver('facebook')->redirect('/');
//     }

//     public function callback()
//     {
//         $user = Socialite::driver('facebook')->user();
//         dd($user);
//     }

}




