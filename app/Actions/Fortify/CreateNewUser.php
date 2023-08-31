<?php

namespace App\Actions\Fortify;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // dd(request()->all());
        // dd($input);
        if(Route::has("register")){
            Validator::make($input, [
                'nom' => ['required', 'string','min:2', 'max:255'],
                'prenom' => ['required', 'string','min:3', 'max:255'],
                'telephone' => ['required', 'string', 'max:255','min:9','unique:users,telephone_1'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'password' => $this->passwordRules(),
            ])->validate();
    
            $username = (explode("@",$input['email']))[0];

            $user= User::create([
                'name' => str()->upper($input['nom']) ." " .$input['prenom'],
                'username' => $username,
                'nom' => $input['nom'],
                'prenom' => $input['prenom'],
                'email' => $input['email'],
                'telephone'=>$input['telephone'],
                'password' => Hash::make($input['password']),
            ]);
            if($user){
                $user->profile()->create([
                    'unique'=> Profile::dossier(),
                    'nom'=>$input['nom'],
                    'prenom'=>$input['prenom'],
                    'email' => $input['email'],
                    'telephone_1'=>$input['telephone'],
                    'telephone_2'=>null,
                    'adresse'=>null,
                    'genre_id'=>0,
                ]);
                return $user;
            }
        }
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        
       
    }
}
