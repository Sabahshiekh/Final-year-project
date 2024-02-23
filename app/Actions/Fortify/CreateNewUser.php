<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
        Validator::make($input, [
            'name' => ['required', 'string', 'max:50'],
            'father_name' => ['required', 'string', 'max:50'],
            'registration_no' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'dob' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'in:Male,Female,Other'],
            'joining_year' => ['required', 'integer', 'date_format:Y'],
            'passing_year' => ['required', 'integer', 'date_format:Y'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();



        return User::create([
            'name' => $input['name'],
            'father_name' => $input['father_name'],
            'registration_no'  => $input['registration_no'],
            'email'  => $input['email'],
            'dob'  => $input['dob'],
            'phone_number'  => $input['phone_number'],
            'gender'  => $input['gender'],
            'joining_year' => $input['joining_year'],
            'passing_year'  => $input['passing_year'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
