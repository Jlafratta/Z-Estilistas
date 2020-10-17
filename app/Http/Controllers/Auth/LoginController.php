<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\SocialProfile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

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

    protected function authenticated(Request $request, $user)   //defino redireccionamiento segun rol una vez autenticado
    {
        if($user->hasRole('Administrador')){
            return redirect()->route('admin.turnos.daily') ;
        }else{
            return redirect()->route('admin.turnos.daily') ;
        }
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver)
    {
        $drivers = ['facebook', 'google'];

        if(in_array($driver, $drivers)){
            return Socialite::driver($driver)->redirect();
        }else{
            return redirect()->route('login');
        }

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request, $driver)
    {

        if($request->get('error')){     // Si cancelo el logueo, redirecciona al login
            return redirect()->route('login');
        }

        $userSocialite = Socialite::driver($driver)->user();
        
        $socialProfile = SocialProfile::where('social_id', $userSocialite->getId())
                                        ->where('social_name', $driver)->first();

        if(!$socialProfile){

            $user = User::where('email', $userSocialite->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'name' => $userSocialite->getName(),
                    'email' => $userSocialite->getEmail(),
                ]);
                $userRole = Role::where('name', 'Cliente')->first();
                $user->roles()->attach($userRole);
            }

            $socialProfile = SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->getId(),
                'social_name' => $driver,
                'social_avatar' => $userSocialite->getAvatar(),
            ]);
        }

        auth()->login($socialProfile->user);

        if($socialProfile->user->hasRole('Administrador')){
            return redirect()->route('admin.turnos.daily') ;
        }else{
            return redirect()->route('admin.turnos.daily') ;
        }
    }
}
