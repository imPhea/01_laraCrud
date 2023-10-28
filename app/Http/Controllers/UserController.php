<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Index() { return view('User.register'); }
    public function Create(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = Hash::make($request->password);
        if(!empty($username) && !empty($email) && !empty($password)) {
            Register::create([
                'username'  => $username,
                'email'     => $email,
                'password'  => $password
            ]);
            return redirect('/login');
        } else return "Fill can't null!";
    }
    public function Login() {return view('User.login');}

    public function LoginSubmit(Request $request)
    {
        $email    = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email'=>$email, 'password'=>$password])) {
            return view("Article.index", ['articles'=>Article::all()]);
        }
        return redirect('/login');
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
