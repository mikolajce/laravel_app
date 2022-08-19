<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
      return view('register.create');
    }

    public function store(){

      $attributes = request()
        ->validate([
          'name' => [
            'required',
            // 'alpha',
            'max:255'
          ],
          'username' => [
            'required',
            'unique: users, username',
            // 'alpha_dash',
            'min:4',
            'max:32'
          ],
          'email' => [
            'required',
            'unique: users, email',
            'email'
          ],
          'password' => [
            'required',
            'min:8',
            'max:32'
          ]
      ]);

      $attributes['password'] = bcrypt($attributes['password']);

      User::create($attributes);

      return redirect('/');
    }
}
